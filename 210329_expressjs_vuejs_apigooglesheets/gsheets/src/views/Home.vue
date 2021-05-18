<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <hr>
    <DashCampagne/>
    <hr>
    <DashLeads/>
    <hr>
    <Campagnes2020/>
    <hr>
    <TestSheet/>
  </div>
</template>

<script>
// @ is an alias to /src
// import google from 'googleapis';
// import keys from '../../keys.json';
import HelloWorld from '@/components/HelloWorld.vue'
import DashCampagne from '@/components/DashCampagne.vue'
import TestSheet from '@/components/TestSheet.vue'
import DashLeads from '../components/DashLeads.vue'
import Campagnes2020 from '../components/Campagnes2020.vue'


export default {
  name: 'Home',
  components: {
    HelloWorld,
    DashCampagne,
    TestSheet,
    DashLeads,
    Campagnes2020,
  }
}
</script>
