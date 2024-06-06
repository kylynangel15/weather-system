<template>
  <div>
    <router-view />
  </div>
</template>

<script>
import { useConfigStore } from './stores/ConfigStore';

export default {
  name: 'App',
  data () {
    return {
      configStore: useConfigStore(),
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
          this.configStore.setGoogleApi(this.googleMapApi);

        }).catch((error) => {
          console.log(error)
        
        })

    }
  }
}
</script>

<style>

</style>
