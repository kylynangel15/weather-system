

export default {
    methods: {
        $getWeatherIcon(value) {
            if (value == 'Thunderstorm') {
                return 'https://img.icons8.com/3d-fluency/94/lightning-bolt.png';
            }

            if (value == 'Rain') {
                return 'https://img.icons8.com/3d-fluency/94/storm.png';
            }

            if (value == 'Snow') {
                return 'https://img.icons8.com/3d-fluency/94/snow.png';
            }

            if (value == 'Clear') {
                return 'https://img.icons8.com/3d-fluency/94/sun.png';
            }

            return 'https://img.icons8.com/3d-fluency/94/cloud.png';
        },
    }
};
