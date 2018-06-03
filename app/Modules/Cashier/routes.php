<?php

Route::group(['module' => 'Cashier', 'prefix' => 'cashier', 'namespace' => 'App\Modules\Cashier\Controllers'], function() {

    Route::get('/', 'CashierController@index');

});