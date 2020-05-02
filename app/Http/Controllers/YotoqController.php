<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YotoqController extends Controller
{
    public function  index(){

        return view('home_panel.registratsiya');
    }
}
