<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class userDataController extends Controller
{
    public function index(){
        return view("user",[
            "title" => "User",
            "active" => "user",
            "users" => UserData::all()
        ]);
    }

    public function detail(UserData $user){
        return view("userDetail", [
            "title" => "User Detail",
            "active" => "user",
            "user" => $user
        ]);
        
    }
}
