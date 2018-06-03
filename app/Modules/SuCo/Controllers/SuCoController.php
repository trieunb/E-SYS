<?php

namespace App\Modules\SuCo\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuCoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("SuCo::index");
    }
}