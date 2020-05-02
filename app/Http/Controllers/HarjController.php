<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harj;

class HarjController extends Controller
{
    public function index(){

        $harj=Harj::all();
        return view('home_panel.harj',compact('harj'));
    }
    public function insert(Request $request){

        $harj= new Harj();
        $harj->harj_name=$request->h_nomi;
        $harj->summ = $request->summ;
        $harj->soni= $request->soni;
        $harj->um_summ=$request->um_summ;
        $harj->save();
        $request->session()->flash('success','Saqlandi');
        return redirect('/xarajatlar');

    }
}
