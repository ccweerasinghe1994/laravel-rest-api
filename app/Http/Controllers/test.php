<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class test extends Controller
{
    public function index(){

        $data = [];

        $users = DB::table('users')
            ->orderBy('id')
            ->chunk(100,function ($users) {

                foreach ($users as $user){

                    $user = $user->name;
                    return $user;
                }


            });
        return response()->json(['data'=>$users],200);

    }
}
