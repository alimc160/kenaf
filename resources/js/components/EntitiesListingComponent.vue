<template>
  <div class="table-wrapper">
    <div
      class="
        
        table-collapse
        scrollbar-thin scrollbar-visible
      "
      data-simplebar="init"
    >
      <div class="simplebar-wrapper" style="margin: 0px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px">
            <div
              class="simplebar-content-wrapper"
              style="height: auto; overflow: hidden"
            >
              <div class="simplebar-content" style="padding: 0px">
                <table class="table table--lines">
                  <colgroup>
                    <col width="4%" />
                    <col width="20%" />
                    <col width="20%" />
                     
                  </colgroup>
                  <thead class="table__header">
                    <tr class="table__header-row">
                      <th class="table__th-sort">
                        <span class="align-middle">Id</span>
                      </th>
                      <th class="table__th-sort">
                        <span class="align-middle">Title</span>
                      </th>                    
                      <th class="table__th-sort d-none d-sm-table-cell">
                        <span class="align-middle">Created At</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr class="table__row" v-for="entity in entitisListing" :key="entity.id">
                      <td class="table__td">{{entity.id}}</td>
                   
                      <td class="table__td" v-if="component_type == 'widget'"><span :title="entity.title">{{entityTitle(entity.title)}}</span></td>
                      <td class="table__td" v-else><span :title="entity.title">{{entity.title}}</span></td>
                      <td class="table__td">
                        <span class="text-grey">{{entity.created_at}}</span>
                      </td>
                    </tr>
                    <tr v-if="entitisListing.length == 0"><td class="table__td" colspan="3">No Entities found.</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div
          class="simplebar-placeholder"
          style="width: auto; height: 550px"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-horizontal"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar simplebar-visible"
          style="transform: translate3d(0px, 0px, 0px); display: none"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-vertical"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar simplebar-visible"
          style="transform: translate3d(0px, 0px, 0px); display: none"
        ></div>
      </div>
    </div>
  </div>
</template>

<script>
import * as env from "../store/.env";
import axios from "axios";
import {cropText} from "../helpers/helpers";
export default {
  props: {
    component_type: {
      default: 'widget',
    }, 
  },
  data() {
    return {
      entitisListing: [],     
    };
  },
  methods: {
    loadEntities: function () {
      var self = this;
          axios
          .get(env.baseUrl + "api/get-entities?page=1")
          .then(function (reponse) {          
            self.entitisListing = reponse.data.result;
          })
          .catch(function (error) {
            console.log(error);           
          });  
    },  
    entityTitle: function(text){
        return  cropText(text,15);
     }
  },
  computed: {
     
  },
  mounted: function () {
    this.loadEntities();
  },
};
</script>