<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.general');
    }

    public function index2()
    {
        return view('settings.profile_settings');
    }

    public function index4()
    {
        return view('settings.add_user');
    }

    public function index3()
    {
        return view('settings.user_management');
    }

    public function addUser(Request $request){
        $user = new User;

        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->branch = $request->branch;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
    }
}
