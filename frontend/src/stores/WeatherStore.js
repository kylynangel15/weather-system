import { defineStore } from 'pinia';
import axios from 'axios';
import Swal from 'sweetalert2'

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
            this.loading = false
            this.errorNotif(error.response.data.message)
        })
    },
    setLoading(payload) {
      this.loading = payload
    },
    errorNotif(message, timer = 3000){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: timer,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'error',
          title: message == null ? 'Something went wrong!' : message  
        })
    },
  },
});