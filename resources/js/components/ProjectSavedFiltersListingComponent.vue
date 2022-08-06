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
                    <col width="100px" />
                    <col width="20%" />
                    <col width="20%" />
                    <col width="16%" />
                    <col />
                  </colgroup>
                  <thead class="table__header">
                    <tr class="table__header-row">
                      <th class="table__th-sort">
                        <span class="align-middle">Id</span>
                      </th>
                      <th class="table__th-sort">
                        <span class="align-middle">Name</span>
                      </th>
                      <th class="table__th-sort">
                        <span class="align-middle">Project</span>
                      </th>
                      <th class="table__th-sort">
                        <span class="align-middle">Attributes</span>
                      </th>
                      <th class="table__th-sort d-none d-sm-table-cell">
                        <span class="align-middle">Created At</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr class="table__row" v-for="pSfilter in getProjectSavedFilters" :key="pSfilter.id">
                      <td class="table__td">{{pSfilter.id}}</td>
                      <td class="table__td">
                        <span class="text-grey">{{filterTitle(pSfilter.title)}}</span>
                      </td>
                      <td class="table__td">
                        <span class="text-grey">{{filterTitle(pSfilter.project.title)}}</span>
                      </td>
                      <td class="table__td">
                       <div class="badge badge--sm badge--blue" title="Entities">{{pSfilter.entities.length}} </div>
                       <div class="badge badge--small badge--green" title="Filters">{{pSfilter.filters.length}} </div>
                      </td>
                      <td class="table__td text-nowrap">
                        <span class="text-grey">{{pSfilter.created_at}}</span> 
                      </td>
                    </tr>
                    <tr v-if="getProjectSavedFilters.length == 0">
                      <td class="table__td" colspan="3">No Saved Filters found.</td>
                    </tr>
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
import toastr from 'toastr';
import {cropText} from "../helpers/helpers";
export default {
  props: {
    project_id:{
      default:null
    }
  },
  data() {
    return {
      projectSavedFilters: [],
    };
  },
  methods: {
     filterTitle: function(text){
        return  cropText(text,15);
     }
  },
  computed: {
    getProjectSavedFilters: function(){
      if(this.project_id != null){
         return this.$store.getters.GET_project_saved_filters_listing.filter((obj)=>{
          return obj.project.id ==this.project_id;
        });
      }else{
          return this.$store.getters.GET_project_saved_filters_listing;
      }
          
    }
  },
  mounted(){
  
  },
};
</script>