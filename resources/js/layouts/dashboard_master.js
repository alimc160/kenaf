import AddFilterComponent from '../components/AddFilterComponent'
import ProjectSavedFiltersListingComponent from '../components/ProjectSavedFiltersListingComponent'
import FeedListingComponent from "../components/FeedListingComponent";
import MainFiltersComponent from "../components/MainFiltersComponent";
import EntitiesListingComponent from "../components/EntitiesListingComponent";
import Multiselect from "vue-multiselect";
import bus from '../components/bus';

if (document.getElementById('app')) {
    Vue.component('add-filter', AddFilterComponent);
    Vue.component('project-saved-filters-listing', ProjectSavedFiltersListingComponent);
    Vue.component('entities-listing', EntitiesListingComponent);
    Vue.component('main-filters', MainFiltersComponent);
    Vue.component('feed-listing',FeedListingComponent);
    Vue.component('multiselect', Multiselect)
}

let store = window.store;
var app = new Vue({
    el: '#app',
    store
});
