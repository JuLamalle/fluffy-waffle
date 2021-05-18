<template>
    <div class="container">
        <img src='@/assets/logo.jpeg' alt="LogoDashboard">
        <h2 class="p-3 text-center">List of widgets</h2>               
        <div class="row d-flex align-items-center justify-content-around">
        <div>
            <Poketype/>
        </div>
        <div>
            <Meteo/>
        </div>
        <div>
            <Quotes/>
        </div>
        <div>
            <CurrencyCalc/>
        </div>
        <div>
            <News/>
        </div>
        </div>
    </div>    
</template>

<script>
import Poketype from '@/components/Poketype.vue'
import Meteo from '@/components/Meteo.vue'
import Quotes from '@/components/Quotes.vue'
import CurrencyCalc from '@/components/CurrencyCalc.vue'
import News from '@/components/News.vue'

export default {
  name: 'Dashboard',
  components: {
    Poketype,
    Meteo,
    Quotes,
    CurrencyCalc,
    News
  }
}
</script>
