<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class RoleController extends Controller
{
    public function create(Request $request)
    {
        $role = new Role;
        $role->role = 'Admin';

        $role->save();

        $user = User::find([1, 3]);
        $role->users()->attach($user);

        return 'Success';
    }

    public function show(Role $role)
    {
        return view('role.show', compact('role'));
    }

    public function showAll(Role $role)
    {
        $user = User::find([2,4]);
        // foreach ($user->roles as $myrole) {
        //     echo $myrole ;
        // }
        return view('role.test', compact('user'));
        // print_r($user);
        // $roles = User::all()->roles()->orderBy('role')->get();
        return $user->roles;
        $data = array($role, $roles);
        return $data;
    }

    public function removeUser(Role $role)
    {
        return $role;
        // $user = User::find($role->id);

        // $role->users()->detach($user);

        // return 'Success';
    }
}
