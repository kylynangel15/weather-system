<template>
    <div class="fw-widget">

        <div class="fw-widget__time">
            <h3>{{ forecast?.time ?? '01:00 PM' }}</h3>
        </div>

        <div class="fw-widget__content">
            <img 
                class="content-img" 
                src="https://img.icons8.com/3d-fluency/94/storm.png" 
                alt="storm"/> 

            <div class="content-info">
                <div class="cw-degree">
                    <h1>{{ forecast?.temperature ?? '15' }}</h1>
                    <span>°C</span>
                </div>

                <div class="cw-desc">
                    <h2>{{ forecast?.weather_main ?? 'Cloudy' }}</h2>
                </div>
            </div>
        </div>

        <div class="fw-widget__date">
            <p class="fw-day">{{ forecast?.day_short ?? 'Mon'}}</p>
            <p class="fw-date">{{ forecast?.date_short ?? '06/06/2024' }}</p>
        </div>
    </div>
</template>
<script>

export default {
  name: 'ForeCastWidget',
  props: [
    'forecast',
  ],
}
</script>