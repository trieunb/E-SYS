<?php

namespace App\Modules\DonHang\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonHangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("DonHang::index");
    }
}