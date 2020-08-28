<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Azibom\Timezones'], function(){
    Route::get('timezones/{timezone?}', 'TimezonesController@index');
});