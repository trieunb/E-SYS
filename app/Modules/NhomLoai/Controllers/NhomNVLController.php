<?php

namespace App\Modules\NhomLoai\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NhomNVLController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("NhomLoai::nhom_nvl.index");
    }

    public function create()
    {
        return view("NhomLoai::nhom_nvl.create");
    }
}