<?php



Route::get('api/enda', 'EdnaCallbackController@callback')->name('edna.api');
Route::get('enda', 'EdnaCallbackController@callback')->name('edna');
