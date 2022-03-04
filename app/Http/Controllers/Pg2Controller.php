<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pg2Controller extends Controller
{
    function index (){
        return view("pages.page2");
    }
}
