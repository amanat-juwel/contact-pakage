## Contact Us From Pakage

### This will send email to admin and save contact query to database

## Contact Us From Pakage for Laravel 5

Require this package in your composer.json and update composer. 

    composer require amanatjuwel/contact

## Installation

### Laravel 5.x:

After updating composer, add the ServiceProvider to the providers array in config/app.php

    Amanatjuwel\Contact\ContactServiceProvider::class,

Use `php artisan vendor:publish` to create a config file located at `config/dompdf.php` which will allow you to define local configurations to change some settings (default paper etc).
You can also use your ConfigProvider to set certain keys.

### Configuration

    php artisan vendor:publish --provider="Amanatjuwel\Contact\ContactServiceProvider"

The Contact service provider registers its own database migration directory with the framework, so you should migrate your database after installing the package. 

	php artisan migrate

## Using

	localhost/myProject/contact

You can change the admin email address from 'config/contact.php' file


return[

	'send_email_to' => 'admin@example.com'
	
];


### License

This Contact Us From Pakage for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)