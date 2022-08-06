<template>
  <div class="card">
    <div class="card__wrapper">
      <div class="card__container">
        <div class="card__header">
          <div class="card__header-left">
            <h3
              class="card__header-title"
              v-if="this.component_type == 'filtered_feed'"
            >
              Filters Feeds
              <small>({{ getFeedListing.length }})</small>
            </h3>
            <h3 class="card__header-title" v-else>
              Feeds
              <small>({{ getFeedListing.length }})</small>
            </h3>
          </div>
        </div>
        <div class="card__body">
          <div class="card__container card__container--gutter-sm pl-1 pr-1">
            <div class="row gutter-bottom-sm" @scroll="loadNewFeeds">
              <div
                v-for="feed in getFeedListing"
                :key="feed.id"
                class="col-12 col-sm-6 col-lg-4 pl-2 pr-2"
              >
                <div class="card review-list box-shadow-none border p-3">
                  <div class="review-list__item index-1">
                    <a
                      class="review-list__avatar color-green"
                      :href="feed.url"
                      target="_blank"
                    >
                      <img
                        class="border--grey-color-3"
                        :src="feed.image"
                        alt="feed_image"
                      />
                    </a>
                    <div class="flex-column-center">
                      <h5 class="m-0">
                        <a :href="feed.url" target="_blank">
                          {{ feed.title }}
                        </a>
                      </h5>
                      <span>{{ feed.created_at }}</span>
                    </div>
                  </div>
                </div>
              </div>
              <p v-if="getFeedListing.length == 0">
                Nothing match to your filters.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import * as env from "../store/.env";
import axios from "axios";
import bus from "../components/bus";

export default {
  props: {
    component_type: {
      default: "filtered_feed",
    },
  },
  data() {
    return {
      pageNo: 1,
      feedReqFlag: true,
    };
  },
  methods: {
    loadMainFeedListing: function (eventName = null) {
      var self = this;
      if (self.feedReqFlag == true) {
        self.feedReqFlag = false;
        if (self.component_type == "filtered_feed") {
          var data = {search:self.$store.getters.GET_main_filters};
        } else {
          var data = {};
        }
        axios
          .post(env.baseUrl + "api/get-feed-listing?page=" + self.pageNo, data)
          .then(function (res) {
            self.feedReqFlag = true;
            if (eventName == null) {
              if (self.component_type == "filtered_feed") {
                self.$store.dispatch(
                  "SET_filtered_feed_listing",
                  res.data.result
                );
              }else{
                    self.$store.dispatch("SET_main_feed_listing", res.data.result);
              }


              if (res.data.next_page_url != "null") {
                self.pageNo += 1;
              }
            } else {
              if (res.data.next_page_url == "null") {
                self.feedReqFlag = false;
              } else {
                self.pageNo += 1;
              }
              if (self.component_type == "filtered_feed") {
                self.$store.dispatch(
                  "UPDATE_filtered_feed_listing",
                  res.data.result
                );
              } else {
                self.$store.dispatch(
                  "UPDATE_main_feed_listing",
                  res.data.result
                );
              }
            }
          })
          .catch(function (error) {
            console.log(error);
            self.feedReqFlag = true;
          });
      }
    },
    loadNewFeeds: function ({
      target: { scrollTop, clientHeight, scrollHeight },
    }) {
      console.log(scrollTop + clientHeight, scrollHeight);
      if (scrollTop + clientHeight >= scrollHeight) {
        this.loadMainFeedListing("scroll");
      }
      //
    },
  },
  computed: {
    getFeedListing: function () {
      if (this.component_type == "main_feed") {
        return this.$store.getters.GET_main_feed_listing;
      } else {
        return this.$store.getters.GET_filtered_feed_listing;
      }
    },
  },
  mounted: function () {
    this.loadMainFeedListing();

    //document.addEventListener('scroll', this.loadNewFeeds);
  },
  created: function () {
    var self = this;
    if (self.component_type == "filtered_feed") {
      bus.$on("filterRequest", function () {
        self.pageNo = 1;
        self.feedReqFlag = true;
        self.loadMainFeedListing();
      });
    }
  },
  destroyed() {
    bus.$off("filterRequest");
  },
  beforeDestroy() {
    bus.$off("filterRequest");
  },
};
</script>

<style scoped>
</style>
