<template>
    <div class="fore-desc">
        <div class="fore-desc__header"> 
            <h4>Forecast</h4>
            <h1>Next 12 Hours</h1>
        </div>

        <div class="fore-desc__content"> 
            <div class="fore-section">
                <forecast-widget
                    v-for="(forecast, index) in forecasts" :key='index'
                    :forecast="forecast"
                ></forecast-widget>
            </div>
        </div>
    </div>
</template>


<script>
import ForecastWidget from '../cards/ForecastWidget.vue';
import { useWeatherStore } from '@/stores/WeatherStore';

export default {
  name: 'ForecastSection',
  data () {
    return {
        currentWeather: [
          1,2,3,4,5
        ]
    }
  },
  computed: {
    forecasts() {
      let weather = useWeatherStore().weather;

      if (weather) {
        return weather.weather.forecast
      }

      return this.currentWeather;
    },
  },
 
  components: {
    ForecastWidget,
  }
}
</script>
