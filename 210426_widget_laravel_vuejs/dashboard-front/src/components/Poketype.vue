<template>
  <div class="container-fluid">
    <div class="pokewidget div-rounded">
      <div class="text-center">
        <h1>Pokemon Moves List <span class="text-danger">Ruby</span>/<span class="text-primary">Saphir</span> Version</h1>
       <!-- <div v-if="pokemon.length === 0">
            <h2> No customer found at the moment </h2>
        </div> -->
      </div>
      <input v-model="pokeinput" placeholder="Enter Pokemon Name" @keyup.enter="fetchPokemonInput(pokeinput)">
      <div class="">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" @click="orderByName()">Move Name</th>
                <th scope="col" @click="orderByLvl()">Level Learned At</th>
                <th scope="col" @click="orderByMethod()">Learn Method</th>
              </tr>
            </thead>
            <tbody class="">
              <tr v-for="move in pokemon" :key="move._id">
                <td>{{ move.move.name }}</td>
                <td>{{ move.version_group_details[0].level_learned_at }}</td>
                <td>{{ move.version_group_details[0].move_learn_method.name }}</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Poketype',
  data () {
    return {
      pokemon: [],
      pokeinput: ''
    }
  },
  methods: {
    fetchPokemonInput () {
      axios
        .get(`http://localhost:8000/api/poketype/${this.pokeinput}`)
        .then(data => (this.pokemon = data.data))
        .then(this.orderByLvl)
    },
    orderByName () {
      this.pokemon.sort((a, b) => (a.move.name > b.move.name) ? 1 : ((b.move.name > a.move.name) ? -1 : 0))
    },
    orderByLvl () {
      this.pokemon.sort((a, b) => (a.version_group_details[0].level_learned_at > b.version_group_details[0].level_learned_at) ? 1 : ((b.version_group_details[0].level_learned_at > a.version_group_details[0].level_learned_at) ? -1 : 0))
    },
    orderByMethod () {
      this.pokemon.sort((a, b) => (a.version_group_details[0].move_learn_method.name > b.version_group_details[0].move_learn_method.name) ? 1 : ((b.version_group_details[0].move_learn_method.name > a.version_group_details[0].move_learn_method.name) ? -1 : 0))
    }
  }
}
</script>

<style scoped>
.pokewidget {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 500px;
  padding: 30px;
  margin: 15px;
  box-shadow: 8px 8px 12px #aaa;
  background: #B3FFAB;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to bottom, #12FFF7, #B3FFAB);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #12FFF7, #B3FFAB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.div-rounded {
  border-radius: 2rem;
}

input {
  background-image: linear-gradient(to right, #02AAB0 0%, #00CDAC  51%, #02AAB0  100%);
  text-align: center;
  text-transform: uppercase;
  font-size: 12px;
  margin: 9px;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
  box-shadow: 0 0 20px #eee;
  border-radius: 10px;
  border: none;
  display: block;
}

input:hover {
  background-position: right center; /* change the direction of the change here */
  color: #fff;
  text-decoration: none;
}

input:focus {
  color: green;
  outline: none;
}

h1 {
  font-size: 30px;
  font-weight: 700;
  text-shadow: 2px 2px 2px #8b8b8b;
}

thead {
  display: block;
  font-size: 12px;
}

tbody {
  display: block;
  max-height: 300px;
  overflow-y: auto;
}

table {
    width: 436px;
    border-spacing: 0;
}

tbody td, thead th {
    width: 140px;
}

thead th:last-child {
    width: 156px;
}

::-webkit-scrollbar {
 width: 13px;
 height: 13px;
}
::-webkit-scrollbar-thumb {
 background: linear-gradient(13deg, #B3FFAB 14%,#12fff7 64%);
 border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover{
 background: linear-gradient(13deg, #c7ceff 34%,#12fff7 64%);
}
::-webkit-scrollbar-track{
 background: #ffffff50;
 border-radius: 10px;
 box-shadow: inset 7px 10px 12px #47474785;
}
</style>
