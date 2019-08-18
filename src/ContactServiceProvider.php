<?php

namespace Amanatjuwel\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
	public function boot(){

		//route
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');

		//views
		$this->loadViewsFrom(__DIR__.'/views', 'contact');

		//migrations
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');

		/**
		 *
		 *	to get data from user's config directory
		 *
		 */
		
		//merge config 
		$this->mergeConfigFrom(
	        __DIR__.'/config/contact.php', 'contact'
	    );

	    //vendor publish => php artisan vendor:publish
	    $this->publishes([
	        __DIR__.'/config/contact.php' => config_path('contact.php'),
	    ]);

	}

	public function register(){
		

	}
}