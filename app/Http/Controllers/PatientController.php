<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Patients;
class PatientController extends Controller
{
    public function index()
    {$patient=App\Patients::all();
        return view('home_panel.kassa',compact('patient'));

    }

    public function insert(Request $request){

            $patient = new Patients();
            $patient->pname=$request->input('name');
            $patient->psurname=$request->input('fname');
            $patient->yoshi=$request->input('yoshi');
            $patient->adress=$request->input('adress');
            $patient->tel= $request->input('tel');
            $patient->kelgan_sana=$request->input('kelgan_sana');
            $patient->tashxis=$request->input('tashxis');
            $patient->pnomer = $request->input('pasport');
            if($request->input('check')=="true")
                $patient->status="1";
            else $patient->status="0";
            $patient->save();
            $request->session()->flash('success','Bemor mofaqiyatli saqlandi !');
            return redirect('/reg');
    }
}
