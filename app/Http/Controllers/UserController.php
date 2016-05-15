<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Cache;

class UserController extends Controller{
    /**
     * 显示用户列表
     * @param int $id
     * @return Response
     */
    public function index($id)
    {
        //return phpinfo();
        //$cities = DB::table('pa_cities')->get();
		//print_r($cities);
        
        $arr = array("北京","上海","成都","广州","重庆");

        Cache::put('terry2',$arr,'100');   

        $cities = array('shanghai','beijing','tianjin');
        return view('user.index', ['cities' => $cities]);
    }   
}
