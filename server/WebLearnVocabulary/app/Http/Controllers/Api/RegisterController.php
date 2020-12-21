<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    function register(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $role = ('user');

        $hashPassword = Hash::make($password);

        DB::table("users")->insert([
                "username" => $username,
                "password" => $hashPassword,
                "email" => $email,
                "role" => $role
        ]);

        $responseData = array("data"=>null);
        return response()->json($responseData, 200);
    }
}
