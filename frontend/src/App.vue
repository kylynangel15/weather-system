<template>
  <div>
    <router-view />
  </div>
</template>

<script>
import { mapActions } from 'pinia';
import { useMainStore } from './stores/store';

export default {
  name: 'App',
  data () {
    return {
      store: useMainStore(),
      googleMapApi: '',
    }
  },
  created() {
    this.getList()
  },
  methods: {
   
    getList() {
      this.axios
        .get('/api/get-config-key')
        .then((response) => {
          this.googleMapApi = response.data.google_map_api
          this.store.setGoogleApi(this.googleMapApi);

        }).catch((error) => {
          console.log(error)
        
        })

    }
  }
}
</script>

<style>

</style>
