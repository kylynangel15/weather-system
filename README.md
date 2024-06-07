# Project Name

## Business Requirements
[Add your business requirements here]

## Figma Design
[Add the link to your Figma design here]

## Demo
[Add the link to your demo here]

## Pre-requisite
- Laravel 11
- Vue 3
- PHP v8.2
- Node v18.20
- Yarn

## Getting Started

```bash
# Clone the repository
git clone [repository_url]

# Add .env file
# list of my env

# Install dependencies
composer install

# Serve the application
php artisan serve

# Navigate to the frontend directory
cd /frontend

# Add .env file
# base URL must be the same with the Laravel backend setup

# Install frontend dependencies
yarn

# Start the frontend development server
yarn dev
About the Project
This project adopts a loosely coupled approach with separate Laravel backend and Vue frontend.

Backend
Service Layer Code Design

Api > Controllers > Services
Includes Actions and Transformers
Actions:

Actions have a separation of concern. Each action is easier to extend and can be reused in other business logic.
Transformer:

Transformers are data formatters and can be reusable as well.
Frontend
Sample frontend design available in Figma.
Preference for Stylus CSS pre-processors because of its concise syntax, which reduces redundancy and makes code more readable. It supports variables, mixins, and nested syntax which streamlines workflow and promotes code reuse. Stylus can perform mathematical operations and handle vendor prefixing automatically, enhancing productivity.
CSS folder structure is based on Matthias Ott's structure for more specificity and modularity.
Currently using the Options API in Vue 3 due to familiarity and faster coding capability, rather than the Composition API.