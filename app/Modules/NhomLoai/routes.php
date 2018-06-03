<?php

Route::group(['module' => 'NhomLoai', 'prefix' => 'nhom-loai', 'namespace' => 'App\Modules\NhomLoai\Controllers'], function() {

    Route::get('/nhom-nvl', 'NhomNVLController@index');
    Route::get('/nhom-nvl/create', 'NhomNVLController@create');

    Route::get('/ncc', 'NhaCungCapController@index');
    Route::get('/ncc/create', 'NhaCungCapController@create');

});