<?php

Route::group(['module' => 'ThongBao', 'prefix' => 'thong-bao', 'namespace' => 'App\Modules\ThongBao\Controllers'], function() {

    Route::get('/', 'ThongBaoController@index');

});