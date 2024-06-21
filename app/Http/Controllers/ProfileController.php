<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id" => $request->id,
            "name" => $name,
            "age" => $age
        ];

        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response($data, 200)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    
    }
}
