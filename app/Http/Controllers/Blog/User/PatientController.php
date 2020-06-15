<?php

namespace App\Http\Controllers\Blog\User;

use App\Models\Patients;
use App\Models\Tashxis;
use App\Models\Yotoq_hizmat;
use App\Repositories\User\PatientRepository;
use Illuminate\Http\Request;

class PatientController extends UserBaseController
{
    private $patientRepository;
    public function __construct()
    {
        parent::__construct();
        $this->patientRepository=app(PatientRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
{

    return view('Blog.User.index');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('blog.user.registratsiya');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $patient = new Patients();
        $patient->pname=$request->input('name');
        $patient->psurname=$request->input('fname');
        $patient->yoshi=$request->input('yoshi');
        $patient->adress=$request->input('adress');
        $patient->tel= $request->input('tel');
        $patient->kelgan_sana=$request->input('kelgan_sana');
        $patient->pnomer = $request->input('pasport');
        if($request->input('check')=="true")
        {
            $patient->status = "1";

        }
        else $patient->status="0";

        $patient->save();
         $id = $patient->id;
            $tashxis= new Tashxis();
            $tashxis ->patient_id = $id;
            $tashxis->tashxis = $request->input('tashxis');
            $tashxis->save();
        if($request->input('check')=="true")
        {
            $yotoq_xizmat= new Yotoq_hizmat();

            $yotoq_xizmat->pid = $id;
            $yotoq_xizmat->palata = $request->input('palata_no');
            $yotoq_xizmat->yotoq = $request->input('yotoq_no');
            $yotoq_xizmat->kirgansana= $request->input('kirgan_sana');
            $yotoq_xizmat->status=1;
            $yotoq_xizmat->save();
        }
        $request->session()->flash('success','Bemor mofaqiyatli saqlandi !');
        return redirect('/patient.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
