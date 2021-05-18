<template>
  <div class="container-fluid">
      <div class="quote-card">
          <button @click="fetchQuote">Quote</button>
          <select v-model="selected" @change="stimer(selected)">
            <option v-for="option in options" v-bind:value="option.value" :key="option._id">
              {{ option.text }}
            </option>
          </select>
          <div>
              <p class="content">"{{ quote.content }}"</p>
          </div>
          <div>
              <p class="author">{{ quote.author }}</p>
          </div>

      </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Quotes',
  data () {
    return {
      quote: [],
      timer: '',
      selected: '',
      options: [
        { text: '10s', value: 10000 },
        { text: '30s', value: 30000 },
        { text: '1min', value: 60000 }
      ]
    }
  },
  created () {
    this.fetchQuote()
    this.timer = setInterval(this.fetchQuote, 10000)
  },
  methods: {
    fetchQuote () {
      axios
        .get('http://localhost:8000/api/quotes')
        .then(data => (this.quote = data.data))
    },
    cancelAutoUpdate () {
      clearInterval(this.timer)
    },
    async stimer (select) {
      await this.cancelAutoUpdate()
      .then(this.timer = setInterval(this.fetchQuote, select))
    }
  },
  beforeUnmount () {
    this.cancelAutoUpdate()
  }
}
</script>

<style scoped>
.quote-card{
  border: 3px solid ;
  width: 500px;
  height: 300px;
  background-image: url("../assets/citynightbg.jpg");
  background-size: 500px 400px;
  border-radius: 250px / 160px;
}

button, select {
  outline: none;
  background-image: linear-gradient(to right, #757F9A 0%, #D7DDE8  51%, #757F9A  100%);
  position: relative;
  top: 250px;
  left: 0px;
  text-align: center;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
  border-radius: 10px;
}

button:hover, select:hover {
  background-position: right center; /* change the direction of the change here */
  color: #fff;
  text-decoration: none;
}

.content{
  position: relative;
  top: 80px;
  left: 0px;
  font: italic 'Brush Script MT', cursive;
}

.author{
  position: relative;
  top: 80px;
  left: 100px;
  font-family: 'Times New Roman', serif;
}
</style>
