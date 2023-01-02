<?php

namespace App\Http\Controllers;


use App\Models\Users;

class UserController extends Controller
{
    //
    public function getUser(){

        $allUsers = Users::all();

        return view('about', ['users' => $allUsers]);
    }
}
