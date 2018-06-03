<?php

Route::group(['module' => 'NhomLoai', 'prefix' => 'nhom-loai', 'namespace' => 'App\Modules\NhomLoai\Controllers'], function() {

    Route::get('/', 'NhomNVLController@index');
    Route::get('/create', 'NhomNVLController@create');

});