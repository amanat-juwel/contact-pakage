<?php



Route::namespace('Amanatjuwel\Contact\Http\Controllers')->group(function () {
   
    Route::get('contact', 'ContactController@index')->name('contact');

	Route::post('contact', 'ContactController@store');

});




