<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyReportController extends Controller
{
    public function index()
    {
        return view('dailyReport');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
