<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pg4Controller extends Controller
{
    function index(){
        $tableau = array(
            (object)["nom"=>"crayon", "prix"=>3],
            (object)["nom"=>"gomme", "prix"=>1],
            (object)["nom"=>"taille crayon", "prix"=>2],
            (object)["nom"=>"ciseaux", "prix"=>4],
        );
        return view("pages.page4", compact("tableau"));
    }
}
