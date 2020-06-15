<?php

namespace App\Http\Controllers\Blog\User;


use App\Repositories\User\PatientRepository;
use App\Models\Patients;

class HomeController extends UserBaseController
{
    private $patientRepository;
    public function __construct()
    {
        parent::__construct();
        $this->patientRepository=app(PatientRepository::class);
    }
    public function index()
    {
    $patient = Patients::all();
        return view('Blog.User.index',compact('patient'));
    }
}
