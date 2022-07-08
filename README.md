## Litbang Web Application

Web application for e-commerce buying and selling ornamental fish. Developing using [Laravel 8](https://laravel.com/) Framework

### Installation

-   Clone repository to local computer
-   Update package composer
    ```
    composer update
    ```
-   Copy .env.example file to .env
    ```
    cp .env.example .env
    ```
-   Generate key to .env file
    ```
    php artisan key:generate
    ```
-   Set the database on the .env file according to the database on the local computer
-   Migrate database
    ```
    php artisan migrate:fresh --seed
    ```
-   Run server
    ```
    php artisan serve
    ```

### Team

-   [Tsania Azzahra](https://github.com/tsnzzhr/) - Frontend Engineer
-   [Ifanu Antoni](https://github.com/ifanuAntoni/) - Frontend Engineer
-   [Ahmad Lamaul Farid](https://github.com/faridlamaul/) - Backend Engineer
