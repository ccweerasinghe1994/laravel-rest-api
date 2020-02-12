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
            ->where('id',1)
            ->pluck('name');
        
       
        return response()->json(['data'=>empty($users)],200);

    }
}
