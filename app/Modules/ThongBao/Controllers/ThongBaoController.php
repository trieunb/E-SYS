<?php

namespace App\Modules\ThongBao\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThongBaoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("ThongBao::index");
    }
}