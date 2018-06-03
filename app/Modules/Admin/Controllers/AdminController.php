<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Admin::index");
    }
    public function pdfDemo()
    {

        $pdf = PDF::loadView('Admin::pdf');

        return $pdf->download('demo.pdf');

    }
}