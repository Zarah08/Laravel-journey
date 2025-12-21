<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.index")
        ->with("name","zarah")
        // ->with("surname","kari")
        ->with("job","<b>developer</b>")
        ->with("country","<b>Nigeria</b>");
    }
}
