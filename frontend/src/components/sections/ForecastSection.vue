<template>
    <div class="fore-desc">
        <div class="fore-desc__header"> 
            <h4>Forecast</h4>
            <h1>Next 5 Hours</h1>
        </div>

        <div class="fore-desc__content"> 
            <div class="fore-section">
                <forecast-widget></forecast-widget>
                <forecast-widget></forecast-widget>
                <forecast-widget></forecast-widget>
                <forecast-widget></forecast-widget>
                <forecast-widget></forecast-widget>
            </div>
        </div>
    </div>
</template>


<script>
import ForecastWidget from '../cards/ForecastWidget.vue';

export default {
  name: 'ForecastSection',
  components: {
    ForecastWidget,
  }
}
</script>
