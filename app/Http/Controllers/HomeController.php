<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home0043");
    }

public function artikel(){
    return view("Artikel0043");
    }

public function contactus(){
    return view("Contactus0043");
    }
}