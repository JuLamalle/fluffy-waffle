<template>
  <div>
      <h2>Campagnes2020</h2>
    <div v-for="data in datas" v-bind:key="data">
            <div v-for="dat in data" v-bind:key="dat"> 
                {{dat}}
        </div>
    </div>
    <div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</template>

<script>
const API_URL = "http://localhost:8888/campagnes2020";

export default {
  name: "DashCampagnes2020",
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