<template>
  <form @submit.prevent="searchFeedsByFilters">
    <li class="sidebar_menu-item">
      <div class="p-3">
        <div class="media-progress">
          <h5 class="media-progress__title">
            <span class="text-clamp">Select languages</span>
          </h5>
        </div>
        <div class="input-group input-group--append">
          <multiselect
            v-model="in_lang"
            track-by="value"
            label="title"
            placeholder="Select language"
            :options="languages"
            :searchable="false"
            :allow-empty="false"
          ></multiselect>
        </div>
      </div>
    </li>
    <li class="sidebar_menu-item">
      <div class="p-3">
        <div class="media-progress">
          <h5 class="media-progress__title">
            <span class="text-clamp">Select city</span>
          </h5>
        </div>
        <div class="input-group input-group--append">
          <multiselect
            v-model="in_city"
            placeholder="Select city"
            :options="cities"
            :searchable="false"
            :allow-empty="false"
          ></multiselect>
        </div>
      </div>
    </li>
    <li class="sidebar_menu-item">
      <div class="p-3">
        <div class="media-progress">
          <h5 class="media-progress__title">
            <span class="text-clamp">Select Project</span>
          </h5>
        </div>
        <div class="input-group input-group--append">
              <multiselect

          v-model="in_project_filter"
          @input="getProjectFilters"
          placeholder="Select Project"
          label="title"
          track-by="id"
          :options="getProjectListing"

        >
        </multiselect>
          <!-- <select
            class="input input--fluid project_field"
            @change="getProjectFilters()"
            v-model="in_project_id"
          >
            <option value="">Select Project</option>
            <option
              v-for="project in getProjectListing"
              :key="project.id"
              :value="project.id"
            >
              {{ project.title }}
            </option>
          </select> -->
        </div>
      </div>
    </li>
    <li class="sidebar_menu-item">
      <div class="p-3">
        <div class="media-progress">
          <h5 class="media-progress__title">
            <span class="text-clamp">Select Project Saved Filters</span>
          </h5>
        </div>
        <select
          v-if="showSideBarSavedFiltersFlag === false"
          class="form-control"
          style="background: #f8fafb; border: none"
        >
          <option value="">Select project First</option>
        </select>
        <multiselect
          v-if="showSideBarSavedFiltersFlag === true"
          v-model="in_project_saved_filters"
          tag-placeholder="Add this as new tag"
          placeholder="Search or add a tag"
          label="title"
          track-by="id"
          :options="projectSavedFiltersOptions"
          :multiple="true"
          :taggable="true"
        >
        </multiselect>
      </div>
    </li>
    <div class="text-center">
      <button class="button button--primary" type="submit">
        <span class="button__text">Filters</span>
      </button>
    </div>
  </form>
</template>

<script>
import * as env from "../store/.env";
import axios from "axios";
import Multiselect from "vue-multiselect";
import bus from '../components/bus';

export default {
  components: {
    Multiselect,
  },
  props: {
      project_id:{
          default:null
      }
  },
  data() {
    return {
      cities: ["Jaddah", "Rayaz", "Makkah"],
      in_project_saved_filters: [],
      in_project_filter:null,
      languages: [
        { value: "en", title: "English" },
        { value: "dut", title: "Dutch" },
        { value: "es", title: "Spanish" },
        { value: "ar", title: "Arabic" },
      ],
      showSideBarSavedFiltersFlag: false,
      projectSavedFiltersOptions: [],
      filters: [],
      in_lang: "",
      in_city: "",
    };
  },
  methods: {
    loadProjectSavedFilters: function () {
      var self = this;
      axios
        .get(env.baseUrl + "api/get-saved-filter-listing")
        .then(function (res) {
          self.$store.dispatch(
            "SET_project_saved_filters_listing",
            res.data.result
          );
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    loadProjects: function () {
      var self = this;
      axios
        .get(env.baseUrl + "api/get-projects-list")
        .then(function (reponse) {
          var projectListing = reponse.data.result;
          self.$store.dispatch("SET_projects_listing", projectListing);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    getProjectFilters() {
      var self = this;
         self.in_project_saved_filters = [];
      if (self.in_project_filter == null) {
        self.showSideBarSavedFiltersFlag = false;
        return;
      } else {
        self.showSideBarSavedFiltersFlag = true;
      }

      self.projectSavedFiltersOptions = self.getProjectSavedFilters
        .filter((obj) => {
          return obj.project.id === self.in_project_filter.id;
        })
        .map((obj) => {
          return { id: obj.id, title: obj.title };
        });
    },
    searchFeedsByFilters: function () {
      var self = this;
      var setFilter = {};
      let projectSavedFilters = self.in_project_saved_filters.map((obj) => {
        return obj.id;
      });
      if(self.in_project_filter == null){
        var projectFilter = null;
        var selectedProject = projectFilter;
      }else{
          var selectedProject = [];

          selectedProject =  self.in_project_filter.id;
      }
      setFilter = {project_id:selectedProject,lang:self.in_lang.value,city:self.in_city,project_saved_filters:projectSavedFilters};
      self.$store.dispatch("SET_filters", setFilter);
       bus.$emit('filterRequest');

     /*  axios
        .post(env.baseUrl + "api/get-feed-listing?page=1", {
          lang: self.in_lang.value,
          city: self.in_city,
          project_id: projectFilter,
          project_saved_filters: projectSavedFilters,
        })
        .then((res) => {
          self.$store.dispatch("SET_filtered_feed_listing", res.data.result);
        })
        .catch((error) => {
          console.log(error);
        }); */
    },
  },
  computed: {
    getProjectListing: function () {
      if (this.project_id != null) {
        return this.$store.getters.GET_projects_listing.filter((obj) => {
          return obj.id == this.project_id;
        }).map((obj)=>{return {id:obj.id,title:obj.title}});
      } else {
        if(this.$store.getters.GET_projects_listing == null){
          return [];
        }
        return this.$store.getters.GET_projects_listing.map((obj)=>{return {id:obj.id,title:obj.title}});
      }
    },
    getProjectSavedFilters: function () {
      return this.$store.getters.GET_project_saved_filters_listing;
    },
  },
  mounted: function () {
    this.loadProjectSavedFilters();
    this.loadProjects();
  },
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style scoped>
</style>
