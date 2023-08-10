<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class UserInfoController extends Controller
{
    public function create()
{
    return view('create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'age' => 'required|integer',
        'bio' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // format d'images
    ]);
    


    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $photoPath;
    }

    UserInfo::create($validatedData);

    return redirect('/user/create')->with('success', 'utilisateur a ete ajouter');
}

}
