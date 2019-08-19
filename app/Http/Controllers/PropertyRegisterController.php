<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyRegisterController extends Controller
{
    function index(){
        return view('propertyRegister');
    }
}
