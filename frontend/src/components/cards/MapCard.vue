<script setup>
import { GoogleMap, Marker } from 'vue3-google-map'
import { ref } from 'vue';
import { useMainStore } from '@/stores/store';

const center = { lat: 40.689247, lng: -74.044502 }
const store = useMainStore();
const googleApi = ref(store.$state.google_api);

</script>

<template>
    <div>
        <GoogleMap
        styles="dark"
        class="google-map"
        :api-key="googleApi"
        :center="center"
        :zoom="15"
        >
            <Marker :options="{ position: center }" />
        </GoogleMap>
    </div>
</template>