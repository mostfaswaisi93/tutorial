<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles = [
            ["name" => "Admin"],
            ["name" => "Editor"],
            ["name" => "Author"]
        ];
        Role::insert($roles);
        return "Roles are created Successfully!";
    }

    public function addUser()
    {
        $user = new User();
        $user->name = 'Darsh';
        $user->email = 'a@a.com';
        $user->password = encrypt('secret');
        $user->save();

        $roleids = [1, 2];
        $user->roles()->attach($roleids);
        return "Record has been created successfully!";
    }

    public function getRolesByUser($id)
    {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }

    public function getUsersByRole($id)
    {
        $role = Role::find($id);
        $users = $role->users;
        return $users;
    }
}
