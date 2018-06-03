<?php

Route::group(['module' => 'Admin', 'prefix' => 'admin', 'namespace' => 'App\Modules\Admin\Controllers'], function() {

    Route::get('/', 'AdminController@index');
    Route::get('/pdf', 'AdminController@pdfDemo');

});