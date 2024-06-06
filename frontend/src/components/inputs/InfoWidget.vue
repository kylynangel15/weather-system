<template>
    <div class="info-widget">

        <h2>{{ label }}</h2>
        <p>{{ value }}</p>
      
    </div>
</template>
<script>

export default {
  name: 'InfoWidget',
  props: [
    'label',
    'value',
  ],
}
</script>