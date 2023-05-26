## Steps to Start
composer update ( might need install before )
php artisan migrate
php artisan db:seed --class=DataTypesSeeder
php artisan db:seed --class=UsersSeeder
