<?php

namespace App\Modules\NhanVien\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NhanVienController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("NhanVien::index");
    }
}