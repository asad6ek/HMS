<?php
/**
 * Created by PhpStorm.
 * User: Xacker
 * Date: 03.06.2020
 * Time: 15:20
 */

namespace App\Repositories\User;


use App\Repositories\CoreRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MainRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public static function getPatient()
    {
//        $patient=App\Models\Patients::all();
        $patient = DB::table('patients')
            ->get();

        return $patient;

    }
}