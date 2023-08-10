<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{


    protected $fillable = ['id','first_name', 'last_name','email', 'age', 'bio', 'photo'];

    public function deleteUserInfo($id)
{
    $user = UserInfo::find($id);
    if ($user) {
        $user->delete();
        return true; // Successful deletion
    }
    return false; // User not found
}
}

