<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;


class MyClass {
    public $property;
    
    public function myMethod() {
        $users = UserInfo::all();

        return view('user', compact('users'));
    }
}