<?php

Route::group(['namespace'=>'test\contact\Http\Controllers'], function (){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@save');

});

