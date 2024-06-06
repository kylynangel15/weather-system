<template>
    <div class="w-board__info">
        <div class="cw-section">
          <current-widget></current-widget>
        </div>
        
        <div class="info-desc">
          <info-widget></info-widget>
          <info-widget></info-widget>
          <info-widget></info-widget>
          <info-widget></info-widget>
        </div>
      </div>
</template>
<script>
import CurrentWidget from '../cards/CurrentWidget.vue';
import InfoWidget from '../inputs/InfoWidget.vue';

export default {
  name: 'InfoSection',
  components: {
    CurrentWidget,
    InfoWidget
  }
}
</script>
