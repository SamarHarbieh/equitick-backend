# Project Title

Equiticks Financials Backend

## About this Project

The data consists of users and trades. Each user will be authenticated (JWT) to be allowed to do all operations (in our case POST and GET). ADMIN alone can GET trades of all users. Normal USERS can search by deals. ADMINS can search by deals and/or logins.

### Setup

-   Clone the repository
-   Switch to the production branch
-   Run: composer install
-   Add all of your DB info to the .env file to connect to your database
-   Run: php artisan migrate:fresh –seed
-   Run: php artisan key:generate
-   Import mt5_deals table into your local DB
-   In you local DB, run: INSERT INTO trades
                    SELECT * FROM mt5_deals

#### Run the project

-   run php artisan serve