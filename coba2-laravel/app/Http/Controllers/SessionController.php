<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Validation\Validator;
// use Session;
// use Illuminate\Support\Facades\Hash;


class SessionController extends Controller
{
    //

    function login()
    {
        return view('login');
    }


    public function loginlogic(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:12',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('welcome');
        } else {
            return back()->with('fail', 'Username or password is incorrect');
        }
    }

    function welcome()
    {
        return view('welcome');
    }

    function registrasi()
    {
        return view('registrasi');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:12',
            'repassword' => 'required|same:password',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password); // Menggunakan bcrypt untuk menghash password
        $user->IsAdmin = 'no';

        $res = $user->save();

        if ($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}