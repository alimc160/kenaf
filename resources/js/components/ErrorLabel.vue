<template>
  <div>
      <p v-for="error in message" style="color:red" >{{error}}</p>
  </div>
</template>

<script>
import * as env from "../store/.env";
export default {
  props: {message:{
    default:[]
  }},
  data() {
    return {
    };
  },
  methods: {
 
  },
  computed: {
  
  },
  mounted: function () {
  
  },
};
</script>
