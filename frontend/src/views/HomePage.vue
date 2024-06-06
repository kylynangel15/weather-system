<template>
  <div class="w-board">

    <div class="info-container">
      <div class="w-board__info">
        <div class="cw-section">
          <current-widget></current-widget>
        </div>
        
        <div class="info-desc">
          <info-widget></info-widget>
          <info-widget></info-widget>
          <info-widget></info-widget>
          <info-widget></info-widget>
        </div>
      </div>
    </div>

    <div class="more-container">
      <div class="w-board__more">
  
        <div class="input-section">
          <i class="fa fa-search icon"></i>
          <input type="search" placeholder="Search">
        </div>
        
  
        <div class="fore-desc">
          <div class="fore-desc__header"> 
              <h4>Forecast</h4>
              <h1>Next 5 Hours</h1>
          </div>
  
          <div class="fore-desc__content"> 
            <div class="fore-section">
              <forecast-widget></forecast-widget>
              <forecast-widget></forecast-widget>
              <forecast-widget></forecast-widget>
              <forecast-widget></forecast-widget>
              <forecast-widget></forecast-widget>
            </div>
          </div>
        </div>
  
        <div class="map-section">
          <map-card></map-card>
        </div>
      </div>
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
