import EntitiesListingComponent from '../components/EntitiesListingComponent'
import MainFiltersComponent from "../components/MainFiltersComponent";

if (document.getElementById('app')) {
    Vue.component('entities-listing', EntitiesListingComponent);
}



var app = new Vue({
    el: '#app',
 //   store
});
