<template>
  <div class="w-board">

    <div class="info-container">
      <info-section></info-section>
    </div>

    <div class="more-container">
      <div class="w-board__more">
        <search-section></search-section>
        <forecast-section></forecast-section>
        <div class="map-section">
          <map-card></map-card>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import MapCard from '../components/cards/MapCard.vue';
import InfoSection from '../components/sections/InfoSection';
import SearchSection from '../components/sections/SearchSection';
import ForecastSection from '../components/sections/ForecastSection';

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
    MapCard,
    InfoSection,
    SearchSection,
    ForecastSection
  }
}
</script>
