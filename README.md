# Project Setup

This repository contains a Laravel project for e-Commerce Website.

## Getting Started

To get started with the project, follow these steps:

1. **Clone the repository:**

    ```
    git clone https://github.com/soungoolwin/Pharmacy-eCommerce.git
    ```

2. **Navigate to the project directory:**

    ```
    cd Pharmacy-eCommerce
    ```

3. **Copy the `.env.example` file and rename it to `.env`:**

    ```
    cp .env.example .env
    ```

4. **Install PHP dependencies using Composer:**

    ```
    composer install
    ```

5. **Install JavaScript dependencies using npm:**

    ```
    npm install
    ```

6. **Generate the application key:**

    ```
    php artisan key:generate
    ```

7. **Start the development server:**

    ```
    php artisan serve
    ```

8. **Compile assets for development:**

    ```
    npm run dev
    ```

## Additional Notes

-   Make sure you have PHP, Composer, Node.js, and npm installed on your system before proceeding with the setup.
-   Modify the `.env` file according to your environment settings, such as database connection details.
