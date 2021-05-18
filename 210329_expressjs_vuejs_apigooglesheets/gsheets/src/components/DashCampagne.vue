<template>
  <div>
    <h2>DashCampagne</h2>
    <div v-for="data in datas" v-bind:key="data">
      
      {{ data[0] }} - {{ data[2] }} <br>

    </div>
  </div>
</template>

<script>
const API_URL = "http://localhost:8888/dashcampagne";

export default {
  name: "DashCampagne",
  data: () => ({
    error: "",
    datas: []
  }),

  mounted() {
    fetch(API_URL)
      .then(response => response.json())
      .then(result => {
        this.datas = result;
      });
  },
  methods: {}
};
</script>