<template>
    <div class="cw-widget">
        <div class="cw-widget__header">
            <h2>{{ weather?.location.city ?? 'Tokyo' }}</h2>
            <div class="header-date">
                <p>{{ weather?.weather.current.date ?? 'June 5, 2024'}}</p>
                <p>{{ weather?.weather.current.day ?? 'Monday' }}</p>
            </div>
        </div>

        <div class="cw-widget__content">
            <img 
                class="content-img" 
                :src="$getWeatherIcon(weatherMain)" 
                alt="storm"/> 

            <div class="content-info">
                <div class="cw-degree">
                    <h1>{{ weather?.weather.current.temperature ?? '45' }}</h1>
                    <span>°C</span>
                </div>

                <div class="cw-desc">
                    <h2>{{ weather?.weather.current.weather_main ?? 'Clouds' }}</h2>
                    <p>{{ weather?.weather.current.weather_desc ?? 'Broken Clouds' }}s</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { useWeatherStore } from '@/stores/WeatherStore';


export default {
  name: 'CurrentWidget',
  data () {
    return {
    }
  },
  computed: {
    weather() {
      return useWeatherStore().weather;
    },
    weatherMain() {
        return this.weather?.weather.current.weather_main ?? 'Clouds'
    }
  },

}
</script>