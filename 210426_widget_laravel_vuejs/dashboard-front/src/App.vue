<template>
  <div id="nav">
    <p>
      <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email& access_type=online&redirect_uri=http://localhost:8080/login.vue&response_type=code&client_id=75654003697-6eaqorfmk9k97aa8h4jithibtt6v71bo.apps.googleusercontent.com">Se connecter</a>
    </p>
    <router-link to="/">Home</router-link> | 
    <router-link to="/parameters">Parameters</router-link>
    <router-view/>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
