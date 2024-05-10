* MedLoc

* requirements
    * php
    * mysql
    * laravel

* install 
    * composer install

* database configuration
    * create mysql database called "medloc"
    * add this to .env file
    * DB_DATABASE=medloc
    * DB_USERNAME=root
    * DB_PASSWORD=

* migrate
    * php artisan key:generate
    * php artisan migrate:fresh --seed

* run
    * php artisan serve