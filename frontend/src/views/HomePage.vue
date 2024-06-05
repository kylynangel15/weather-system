<template>
  <div class="w-board">

    <div class="w-board__info">
      <current-widget></current-widget>
      
      <div class="info-desc">
        <info-widget></info-widget>
        <info-widget></info-widget>
        <info-widget></info-widget>
        <info-widget></info-widget>
      </div>
    </div>


    <div class="w-board__more">
      <input type="search">


      <div class="fore-desc">

        <div class="fore-desc__header"> 
          <div>
            <h4>Forecast</h4>
            <h1>Next 5 Hours</h1>
          </div>
          <p>See More</p>
        </div>


        <div class="fore-desc__content"> 
          <forecast-widget></forecast-widget>
          <forecast-widget></forecast-widget>
          <forecast-widget></forecast-widget>
          <forecast-widget></forecast-widget>
          <forecast-widget></forecast-widget>
        </div>

      </div>
    </div>


    <div class="w-board__map">
    <map-card></map-card>
    </div>

  </div>
</template>
<script>
import CurrentWidget from '../components/cards/CurrentWidget.vue';
import ForecastWidget from '../components/cards/ForecastWidget.vue';
import InfoWidget from '../components/inputs/InfoWidget.vue';
import MapCard from '../components/cards/MapCard.vue';

export default {
  name: 'HomePage',
  data () {
    return {
      weatherInfo: '',
    }
  },
  created() {
    this.getWeather()
  },
  methods: {
    getWeather() {
      this.axios
        .get('/api/get-weather', {
          params: {
            search: 'Yokohama',
          },
        })
        .then(({data}) => {
            console.log(data)
        })
        .catch((error) => {
          console.log(error)
        })
    }
  },
  components: {
    CurrentWidget,
    InfoWidget,
    ForecastWidget,
    MapCard
  }
}
</script>
