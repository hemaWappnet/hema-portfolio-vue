## About the Project

This is a portfolio project built using Vue.js and Laravel. It showcases various projects, skills, and experiences in a visually appealing and interactive way.

## Features

-   Dynamic project showcase with filtering options.
-   Responsive design for seamless viewing on all devices.
-   Contact form with email integration.
-   Integration with a backend API for managing portfolio data.
-   Smooth animations and transitions for a modern user experience.

## Setup Instructions

Follow these steps to set up the project locally:

### Prerequisites

-   Node.js (v20 or higher)
-   npm or yarn
-   PHP (v8.3 or higher)
-   Composer
-   MySQL or any other supported database

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/hemaWappnet/hema-portfolio-vue.git
    cd hema-portfolio-vue
    ```

2. Install dependencies:

    ```bash
    npm install
    composer install
    ```

3. Set up the environment:

    - Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    - Update the .env file with your database and other configuration details.

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Run database migrations:

    ```bash
    php artisan migrate
    ```

6. Build the frontend assets & Start the development server:

    ```bash
    composer run dev
    ```

7. Open the application in your browser at `http://localhost:8000`.
