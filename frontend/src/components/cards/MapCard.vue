<template>
    <div>
         <google-map
        styles="dark"
        class="google-map"
        :api-key="googleKey"
        :center="center"
        :zoom="15"
        >
            <Marker :options="{ position: center }" />
        </google-map>
    </div>
</template>
<script>
import { useConfigStore } from '@/stores/ConfigStore';
import { useWeatherStore } from '@/stores/WeatherStore';
import { GoogleMap, Marker } from 'vue3-google-map'


export default {
  name: 'MapCard',
  data () {
    return {
        center:  { 
            lat: 35.6821936, 
            lng: 139.762221
        }
    }
  },
  computed: {
    weather() {
      return useWeatherStore().weather;
    },
    googleKey() {
      return useConfigStore().google_key;
    },
  },
  watch: {
    weather() {
        this.center = {
            lat: this.weather.location.lat,
            lng: this.weather.location.lon,
        }
    },
  },
  components: {
    GoogleMap,
    Marker,
  }
}

</script>