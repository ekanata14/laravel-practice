<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class userDataController extends Controller
{
    public function index(){
        return view("user",[
            "title" => "User",
            "users" => UserData::all()
        ]);
    }

    public function detail(UserData $user){
        return view("userDetail", [
            "title" => "User Detail",
            "user" => $user
        ]);
        
    }
}
