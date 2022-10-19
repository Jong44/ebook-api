<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            "NIS" => 3103120135,
            "Name" => "Mohamad Aprilian Tanjung",
            "Phone" => "081215941614",
            "Class" => "XII RPL 4"
        ];
    }
}
