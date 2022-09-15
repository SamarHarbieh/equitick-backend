# Project Title

Equiticks Financials Backend

## About this Project

The data consists of users and trades. Each user will be authenticated (JWT) to be allowed to do all operations (in our case POST and GET). Admin alone can GET trades of all users.

### Setup

-   clone the repository
-   switch to the production branch
-   run composer install

#### Run the project

-   add all of your DB info to the .env file to connect to your database
-   make sure you have the mt5_deals table imported to your database
-   run php artisan serve
-   run php artian migrate
-   go to your database, to trades table and run the following SQL to import all data from mt5_deals table:
    INSERT INTO trades
    SELECT \* FROM mt5_deals;
