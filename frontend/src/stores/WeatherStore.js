import { defineStore } from 'pinia';
import axios from 'axios';

export const useWeatherStore = defineStore('weather', {
  state: () => ({
    weather: null,
    loading: false,
  }),
  actions: {
    getWeather(payload) {
        axios.get('/api/get-weather', {
            params: {
                search: payload,
            },
        }).then(({data}) => {
            this.weather = data

        }).catch((error) => {
            console.log(error)
        })
    },
    setLoading(payload) {
      this.loading = payload
  },
  },
});