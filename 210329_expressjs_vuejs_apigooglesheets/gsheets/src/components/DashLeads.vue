<template>
  <div>
    <h2>DashLeads</h2>
    {{ datas }} <br />
    BITE : {{ datas[0][2] }} <br />
    BITE : {{ datas[1][2] }} <br />
    BITE : {{ datas[2][2] }} <br />
    BITE : {{ datas[3][2] }} <br />

    <div v-for="data in datas" v-bind:key="data">
      {{ data[0] }} - {{ data[1] }} - {{ data[2] }}<br />
    </div>
  </div>
</template>

<script>
const API_URL = "http://localhost:8888/dashleads";

export default {
  name: "DashLeads",
  data: () => ({
    error: "",
    datas: [],
  }),

  mounted() {
    fetch(API_URL)
      .then((response) => response.json())
      .then((result) => {
        this.datas = result;
      });
  },
  methods: {},
};
</script>