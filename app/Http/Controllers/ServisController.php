<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servis;
class ServisController extends Controller
{
  public function index(){

      $servis =Servis::all();
      return view('home_panel.servis',compact('servis'));
  }

  public function insert(Request $request){
      $insert=new Servis();
      $insert->servisnomi=$request->s_nomi;
      $insert->summ=$request->summ;
      $insert->save();
      $request->session()->flash('success','Bemor mofaqiyatli saqlandi !');
      return redirect('/servis');

  }
}
