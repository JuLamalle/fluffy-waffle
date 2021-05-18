<template>
  <div class="meteo-card">
    <img class="bg-grad" alt="bg-grad" src="../assets/bg-grad.png">
    <div class="meteo">
      <div>
        <input type="text" id="position" placeholder="Enter city name" v-model="requete" v-on:keypress="goMeteo">
      </div>
      <br><br>
      <div v-if="temps">
        <h3>Position : {{temps.name}}</h3>
        <h4>Température : {{temps.main.temp}}</h4>
        <h4>Temps : {{temps.weather[0].description}}</h4>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Meteo',
  data () {
    return {
      requete: '',
      temps: undefined,
      api_code: '0129ee49cedb77e90a1323848236df98',
      url_recherche: 'https://api.openweathermap.org/data/2.5/weather?'
    }
  },
  methods: {
    goMeteo (e) {
      if (e.key === 'Enter') {
        axios
          .get(`http://localhost:8000/api/meteo/${this.requete}`)
          .then(reponse => {
            this.temps = reponse.data
          })
        this.requete = ''
      }
    }
  }
}
</script>

<style scoped>
.bg-grad, .meteo-card {
  width: 300px;
  height: 500px;
  border-radius: 30px;
}
.meteo {
  margin-top: -450px;
}
h3 {
  color: white;
  font-size: 25px;
}
h4 {
  color: white;
  font-size: 15px;
}
</style>
