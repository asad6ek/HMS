<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class UserController extends Controller
{
    public function index()
    { $patient=App\User::all();
        return view('home',compact('patient'));

    }
}
