<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertRecord()
    {
        $phone = new Phone();
        $phone->phone = '123456789';
        $user = new User();
        $user->name = 'Darsh';
        $user->email = 'a@a.com';
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Record has been created successfully!";
    }

    public function fetchPhoneByUser($id)
    {
        $phone = Phone::find($id);
        return $phone;
    }
}
