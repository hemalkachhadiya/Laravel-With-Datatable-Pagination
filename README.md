# Laravel Pagination With Datatable
## Demo setup steps
### Versions
```base
php version - "^7.3|^8.0"
laravel version - "^8.40"
```
### Clone
```base
git clone git@github.com:hemalkachhadiya/Laravel-With-Datatable-Pagination.git
```
### Install composer
Go to the project directory   
install composer using cmd
```composer
composer install
```
### setup .env file
copy ```.env.example``` and paste in project and rename to ```.env```   
first create database and setup credentials in ```.env``` file
```php
APP_URL=
DB_CONNECTION=mysql
DB_HOST="YOUR DATABASE HOST"
DB_PORT=3306
DB_DATABASE="YOUR DATABASE NAME"
DB_USERNAME="YOUR DATABASE USERNAME"
DB_PASSWORD="YOUR DATABASE PASSWORD"
```
after env setup run below commands for database
```base
php artisan key:generate
php artisan optimize:clear
php artisan migrate
php artisan db:seed
```
### Install npm for tailwind css
If you can't see css then run below commands
```base
npm install
npm run dev
```