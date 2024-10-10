<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     
     public function index()
     {
         return view('home'); 
     }

     public function confidentiality()
     {
        return view('confidentiality');
     }

     public function RGPD()
     {
        return view('RGPD');
     }

     public function conditions()
     {
        return view('conditions');
     }
}
