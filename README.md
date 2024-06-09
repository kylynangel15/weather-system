# Japan Weather App

## Business Requirements
https://docs.google.com/document/d/1wZyLe_P1GZ2R-2_XWqlNu2PuTQSYFQuilycAA2yfQb8/edit?usp=sharing

## Figma Design
https://www.figma.com/design/mlv9G8MsqR1AtOI8MSGGvh/Japan---Weather-App?node-id=1-246&t=vAtvhla1HiKIE8KW-1

## Demo
![Alt Text](https://github.com/kylynangel15/weather-system/blob/main/frontend/src/assets/WeatherAppDemo.gif)

## Pre-requisite
- Laravel 11
- Vue 3
- PHP v8.2
- Node v18.20
- Yarn

## Getting Started

```bash
# Clone the repository
git clone https://github.com/kylynangel15/weather-system.git

# Add .env file
# (for exam purposes only - *must be hidden in readme)
GEOAPIFY_API_KEY=ed2ab923bb6a44bd8d7c5d876b5c10f6
OPEN_WEATHER_API_KEY=6f7834e0e6420265af3f4236ce6a7674
GOOGLE_MAP_API_KEY=AIzaSyCbGS0GxqyqLazxJqAuevaTlN0Dtp6u_Uo

# Install dependencies
composer install

# Serve the application
php artisan serve

# Navigate to the frontend directory
cd /frontend

# Add .env file
# base URL must be the same with the Laravel backend setup
NODE_ENV=development
BASE_URL=http://127.0.0.1:8000/
DOMAIN_NAME=127.0.0.1
PORT=1515

# Install frontend dependencies
yarn

# Start the frontend development server
yarn dev
```

## About The Project
This project adopts a loosely coupled approach with separate Laravel backend and Vue frontend.

## List of Tech Stack Used
- Laravel 11
    * PHPUnit Testing
- Api Integration 
    * geoapify
    * open weather
    * google map
    * Backend (Laravel) to Frontend (vue) using axios
- Vue
    * vue-router
    * pinia (state management)
    * axios / vue-axios
    * fontawesome
    * stylus (CSS pre-processors)
    * lodash
    * vue-sweetalert2
    * vue3-google-map


## Backend

### Service Layer Code Design
Api > Controllers > Services

Services includes Actions and Transformers

- Actions have a separation of concern. Each action is easier to extend and can be reused in other business logic.

- Transformers are data formatters and can also be reused effectively.



## Frontend

This is my sample Figma design. Designing is my weak side, but I'm still improving. 
I can excel more in backend, but I can also do frontend if a UI/UX template is provided to me.

![Alt Text](https://raw.githubusercontent.com/kylynangel15/weather-system/main/frontend/src/assets/FigmaDesign.png)


### CSS (Stylus CSS pre-processors)

- My CSS folder structure is based on this https://matthiasott.com/notes/how-i-structure-my-css for more specificity and modularity 

- I prefer Stylus CSS pre-processors because of its concise syntax, which reduces redundancy and makes code more readable. It supports variables, mixins, and nested syntax which streamlines workflow and promotes code reuse. Stylus can perform mathematical operations and handle vendor prefixing automatically, enhancing productivity.
  
- I'm still not used to composition in vue 3, so for now, I'm sticking with options because I'm more comfortable with it and can code much faster.
