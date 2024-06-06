<template>
    <div class="input-section">
        
        <i class="fa fa-search icon"></i>
        
        <form @submit.prevent="handleSearch">
            <input type="search" placeholder="Search" v-model="search">
        </form>
    </div>
</template>

<script>
import { useWeatherStore } from '../../stores/WeatherStore';

export default {
  name: 'SearchSection',
  data () {
    return {
      weatherStore: useWeatherStore(),
      search: null
    }
  },
  methods: {
    handleSearch() {
        if (this.search) {
          this.weatherStore.setLoading(true);
          this.weatherStore.getWeather(this.search);
        }
    }
  },
}
</script>

