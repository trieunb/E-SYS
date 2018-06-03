<?php

namespace App\Modules\Cashier\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CashierController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Cashier::index");
    }
}