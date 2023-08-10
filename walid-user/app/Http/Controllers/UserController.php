<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class UserController extends Controller {
    
    public function index()
    {
        $users = UserInfo::all();
        return view('user.index', compact('users'));
    }
    
    public function destroy($id)
{
    $userInfo = new UserInfo();
    if ($userInfo->deleteUserInfo($id)) {
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
    return redirect()->route('user.index')->with('error', 'User not found');
}

}



