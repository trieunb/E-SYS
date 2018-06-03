<?php

Route::group(['module' => 'NhanVien', 'prefix' => 'nhan-vien', 'namespace' => 'App\Modules\NhanVien\Controllers'], function() {

    Route::get('/', 'NhanVienController@index');

});