<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pg1Controller extends Controller
{
    function index (){
        return view("pages.page1");
    }
}
