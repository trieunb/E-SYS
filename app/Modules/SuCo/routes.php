<?php

Route::group(['module' => 'SuCo', 'prefix' => 'su-co', 'namespace' => 'App\Modules\SuCo\Controllers'], function() {

    Route::get('/', 'SuCoController@index');

});