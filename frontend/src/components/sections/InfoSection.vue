<template>
    <div class="w-board__info">
        <div class="cw-section">
          <current-widget></current-widget>
        </div>
        
        <div class="info-desc">
          <info-widget 
            :label="'Feels Like'"
            :value="weatherValue('feels_like', '°C')"
          ></info-widget>
          <info-widget 
            :label="'Humidity'"
            :value="weatherValue('humidity', '%')"
          ></info-widget>
          <info-widget 
            :label="'Pressure'"
            :value="weatherValue('pressure', 'hPa')"
          ></info-widget>
          <info-widget 
            :label="'Wind Speed'"
            :value="weatherValue('wind_speed', 'm/s')"
          ></info-widget>
        </div>
      </div>
</template>
<script>
import CurrentWidget from '../cards/CurrentWidget.vue';
import InfoWidget from '../inputs/InfoWidget.vue';
import { useWeatherStore } from '@/stores/WeatherStore';

export default {
  name: 'InfoSection',
  data () {
    return {
      currentWeather: null
    }
  },
  computed: {
    weather() {
      return useWeatherStore().weather;
    },
  },
  methods: {
    weatherValue(key, unit) {
      let value = '15'

      if (this.weather) {
        value = this.weather.weather.current[key]
      }

      return value + unit

    }
  },
  components: {
    CurrentWidget,
    InfoWidget
  }
}
</script>
