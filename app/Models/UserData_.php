<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData
{
    private static $userData = [
        [
            "id" => "1",
            "name" => "DreamerDream",
            "email" => "dreamerdream@example.com",
            "region" => "Denpasar",
            "img" => "pict-1.jpg"
        ],
        [
            "id" => "2",
            "name" => "Gakure",
            "email" => "gakure@example.com",
            "region" => "Badung",
            "img" => "pict-1.jpg"
        ]
    ];

    public function all(){
        return collect(self::$userData);
    }

}
