<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h3>Last News</h3>
              </div>
            </div>
          </div>
          <input v-model="country" placeholder="ru, us, fr, ch, eg?" />
          <p>Your country is: {{ country }}</p>
          <button v-on:click="countrySearch">Validate</button>

          <div
            v-if="clicked"
            class="card-body"
            v-for="article in articles.slice(0, 5)"
            :key="article"
          >
            <h3> <strong> {{ article.title }}</strong> </h3>
            <p>{{ article.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      articles: [],
      country: "",
      clicked: false,
    };
  },

  methods: {
    countrySearch() {
      axios.get(`http://localhost:8000/api/news/${this.country}`).then((res) => {
        this.articles = res.data.articles;
        this.clicked = true;
      });
    },
  },
};
</script>
