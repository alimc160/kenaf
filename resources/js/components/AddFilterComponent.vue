<template>
  <form @submit.prevent="addNewFilter()">
    <div class="modal__body">
      <h4 class="modal-success__title">Add New Filter</h4>
      <br />
      <div class="modal__container">
        <div class="text-left mt-1 mb-1">
          <label for="">Filter Combination Name</label>
          <input
            v-model="in_title"
            class="input"
            type="text"
            placeholder="Enter Filter Name"
            required
          />
        </div>

        <div class="text-left mt-1 mb-1">
          <label for="">Select Project</label>

          <div class="input-group input-group--append">
            <multiselect
              placeholder="Select Project"
              v-model="inProjectId"
              :options="getProjectListing"
              label="title"
              track-by="id"
            ></multiselect>
            <ErrorLabel
              v-if="errors.hasOwnProperty('project_id') && inProjectId == null"
              :message="errors.project_id"
            ></ErrorLabel>
          </div>
        </div>

        <div class="text-left mt-1 mb-1">
          <label for="">Select Entities</label>
          <multiselect
            placeholder="Select Entities"
            v-model="inEntities"
            :options="entitiesOptions"
            label="title"
            track-by="id"
            :multiple="true"
          ></multiselect>
          <ErrorLabel
            v-if="errors.hasOwnProperty('entities') && inEntities.length == 0"
            :message="errors.entities"
          ></ErrorLabel>
        </div>

        <div class="text-left mt-1 mb-1">
          <label for="">Select/Add Filter Attribute</label>
          <multiselect
            placeholder="Select Filter Attributes"
            v-model="inFilterAttrOptions"
            :options="filterAttrOptions"
            label="title"
            track-by="title"
            @tag="addFilterAttrTag"
            :multiple="true"
            :taggable="true"
          ></multiselect>
          <ErrorLabel
            v-if="
              errors.hasOwnProperty('filters_attr') &&
              inFilterAttrOptions.length == 0
            "
            :message="errors.filters_attr"
          ></ErrorLabel>
        </div>
      </div>
    </div>
    <div class="modal-compact__buttons">
      <div class="modal-compact__button-item">
        <button class="modal-compact__button button" type="submit">
          <span class="button__text">Add New Filter</span>
        </button>
      </div>
      <div class="modal-compact__button-item closeFilterModal">
        <button
          class="modal-compact__button button"
          type="button"
          v-on:click="closeFilterModal"
          data-dismiss="modal"
        >
          <span class="button__text">Close</span>
        </button>
      </div>
    </div>
  </form>
</template>

<script>
import toster from "toastr";
import * as env from "../store/.env";
import Multiselect from "vue-multiselect";
import axios from "axios";
export default {
  props: {},
  components: { ErrorLabel: () => import("./ErrorLabel") },
  data() {
    return {
      errors: [],
      inProjectId: null,
      inFilterAttrOptions: [],
      filterAttrOptions: [],
      in_title: "",
      entityReq: true,
      inEntities: [],
      entitiesOptions: [],
      filterReq: true,
      addfilterReq: true,
    };
  },
  methods: {
    addFilterAttrTag: function (newTag) {
      console.log(newTag);
      const tag = {
        title: newTag,
      };
      this.inFilterAttrOptions.push(tag);
    },
    getEntities: function () {
      var self = this;

      if (self.entityReq == true) {
        self.entityReq = false;
        axios
          .get(env.baseUrl + "api/get-entities")
          .then(function (reponse) {
            if (reponse.data.next_page_url == null) {
              self.entityReq = false;
            } else {
              self.entityReq = true;
            }
            self.entitiesOptions = reponse.data.result.map((obj) => {
              return { id: obj.id, title: obj.title };
            });
          })
          .catch(function (error) {
            console.log(error);
            self.entityReq = true;
          });
      }
    },
    getFilterAttr: function () {
      var self = this;

      if (self.filterReq == true) {
        self.filterReq = false;
        axios
          .get(env.baseUrl + "api/get-filters")
          .then(function (reponse) {
            if (reponse.data.next_page_url == null) {
              self.filterReq = false;
            } else {
              self.filterReq = true;
            }
            self.filterAttrOptions = reponse.data.result.map((obj) => {
              return { title: obj.title };
            });
          })
          .catch(function (error) {
            console.log(error);
            if (error.length > 0) {
              self.errors = error;
            }
            self.filterReq = true;
          });
      }
    },
    addNewFilter: function () {
      var self = this;
      if (self.inProjectId == null) {
        self.errors = { project_id: ["Please select any Project"] };
        return;
      }
      if (self.addfilterReq == true) {
        self.addfilterReq = false;
        axios
          .post(env.baseUrl + "api/add-filters", {
            entities: self.inEntities.map((obj) => {
              return obj.id;
            }),
            title: self.in_title,
            filters_attr: self.inFilterAttrOptions.map((obj) => {
              return obj.title;
            }),
            project_id: self.inProjectId.id,
          })
          .then(function (reponse) {
            self.addfilterReq = true;
            var data = reponse.data;
            if (data.status == "success") {
              toastr.success(data.message);
              self.in_title = "";
              self.inFilterAttrOptions = [];
              self.$store.dispatch(
                "UPDATE_project_saved_filters_listing",
                data.result
              );
              document.querySelector("body .closeFilterModal .button").click();
              self.errors = [];
            }
          })
          .catch(function (error) {
            self.addfilterReq = true;
            console.log(error.response);
            var error = error.response.data;
            if (error.hasOwnProperty("errors")) {
              self.errors = error.errors;
            }
            if (error.hasOwnProperty("message")) {
              toastr.warning(error.message);
            }
          });
      }
    },
    closeFilterModal: function () {
      this.in_title = "";
      this.inFilterAttrOptions = [];
      this.inProjectId = null;
      this.inEntities = [];
      this.errors = [];
      document.querySelector("body .closeFilterModal .button").click();
    },
  },
  computed: {
    getProjectListing: function () {
      if(this.$store.getters.GET_projects_listing == null || this.$store.getters.GET_projects_listing.length == 0){
        return [];
      }
      return this.$store.getters.GET_projects_listing.map((obj) => {
        return { id: obj.id, title: obj.title };
      });
    },
  },
  mounted: function () {
    this.getEntities();
    this.getFilterAttr();
  },
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
