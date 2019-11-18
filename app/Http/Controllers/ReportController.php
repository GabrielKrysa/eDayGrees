<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('Auth');
    }

    public function index()
    {
        return view('report');
    }
}
