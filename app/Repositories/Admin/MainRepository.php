<?php


namespace App\Repositories\Admin;


use App\Repositories\CoreRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MainRepository extends CoreRepository
{


    protected function getModelClass()
    {
        return Model::class;
    }
    public static function getCountChat(){
//        $count = DB::table('chats')->where(['status','admin_id'],[1,],'','and');
//        return $count;
    }
}
