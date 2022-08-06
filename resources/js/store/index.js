//import {update_post} from './../helpers/helpers';

import Vue from 'vue';
import Vuex from 'vuex';
//import {mediaServerURL, webrtcBaseURL} from './.env';

let state = {
    projectListing: [],
    projectSavedFilterListing: [],
    mainFeedListing: [],
    filteredFeedListing: [],
    currentFeedFilters: [],

};

let mutations = {

    SET_projects_listing: (state, data) => {
        state.projectListing = data;
    },
    SET_project_saved_filters_listing: (state, data) => {
        state.projectSavedFilterListing = data;
    },
    UPDATE_project_saved_filters_listing: (state, data) => {
        state.projectSavedFilterListing.unshift(data);
    },
    SET_main_feed_listing: (state, data) => {
        state.mainFeedListing = data;
    },
    SET_filtered_feed_listing: (state, data) => {
        state.filteredFeedListing = data;
        console.log(state.filteredFeedListing);
    }, SET_filters: (state, data) => {
        state.currentFeedFilters = data;
    },
    UPDATE_filtered_feed_listing: (state, data) => {
        data.forEach(element => {
            state.filteredFeedListing.push(element);
        });
    },
    UPDATE_main_feed_listing: (state, data) => {
        data.forEach(element => {
            state.mainFeedListing.push(element);
        });
    }
};


let actions = {
    SET_filters: ({ commit }, data) => {
        commit('SET_filters', data);
    },

    SET_projects_listing: ({ commit }, data) => {
        commit('SET_projects_listing', data);
    },
    SET_project_saved_filters_listing: ({ commit }, data) => {
        commit('SET_project_saved_filters_listing', data);
    },
    UPDATE_project_saved_filters_listing: ({ commit }, data) => {
        commit('UPDATE_project_saved_filters_listing', data);
    },
    SET_main_feed_listing: ({ commit }, data) => {
        commit('SET_main_feed_listing', data);
    },
    SET_filtered_feed_listing: ({ commit }, data) => {
        commit('SET_filtered_feed_listing', data);
    },
    UPDATE_filtered_feed_listing: ({ commit }, data) => {
        commit('UPDATE_filtered_feed_listing', data);
    },
    UPDATE_main_feed_listing: ({ commit }, data) => {
        commit('UPDATE_main_feed_listing', data);
    },
};

let getters = {

    GET_projects_listing: (state) => {
        return state.projectListing;
    }, GET_main_filters: (state) => {
        return state.currentFeedFilters;
    },
    GET_project_saved_filters_listing: (state) => {
        return state.projectSavedFilterListing;
    },
    GET_main_feed_listing: (state) => {
        return state.mainFeedListing;
    },
    GET_filtered_feed_listing: (state) => {
        return state.filteredFeedListing;
    }
};

Vue.config.devtools = true
Vue.use(Vuex);


export default new Vuex.Store({
    state,
    mutations,
    getters,
    actions
});



