<template>
  <div class="about">
    <Dashboard/>
    <hr>
    <Leads/>
  </div>
</template>

<script>
  import Dashboard from '../components/Dashboard.vue'
import Leads from '../components/Leads.vue'

  export default {
  name: 'About',
  components: {
    Dashboard,
    Leads,
  }
}

</script>