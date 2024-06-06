<template>
  <div class="w-board" :class="weatherLoading ? 'w-loading' : ''">

    <div :class="weatherLoading ? 'loading' : ''">
      <div>
        <img class="hidden" src="https://media.tenor.com/On7kvXhzml4AAAAi/loading-gif.gif" alt="">
      </div>
    </div>
    <div class="info-container">
      <search-section class="mobile"></search-section>
      <info-section></info-section>
    </div>

    <div class="more-container">
      <div class="w-board__more">
        <search-section class="desktop"></search-section>
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
import { useWeatherStore } from '../stores/WeatherStore';

export default {
  name: 'HomePage',
  data () {
    return {
      weatherStore: useWeatherStore(),
      weatherDefault: 'Yokohama',
    }
  },
  created() {
    this.weatherStore.setLoading(true);
    this.getWeather()
  },
  computed: {
    weather() {
      return useWeatherStore().weather;
    },
    weatherLoading() {
      return useWeatherStore().loading;
    },
  },
  watch: {
    weather() {
      if (this.weather) {
        this.weatherStore.setLoading(false);
      }
    },
  },
  methods: {
    getWeather() {
      this.weatherStore.getWeather(this.weatherDefault);
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
