<?php

Route::group(['module' => 'DonHang', 'prefix' => 'don-hang', 'namespace' => 'App\Modules\DonHang\Controllers'], function() {

    Route::get('/', 'DonHangController@index');

});