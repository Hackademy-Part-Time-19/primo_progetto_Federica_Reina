<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function homepage(){
   
    return view('welcome',['titolo' => 'Home']);
    }

    public function contatti() {
        return view('chi-siamo',['titolo' => 'Contatti']);
    }
    

}
