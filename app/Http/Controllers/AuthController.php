<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username', '');
        $password = $request->input('password', '');

        // sama persis seperti login.php kamu (hardcode)
        if ($username === 'reza' && $password === 'reza') {
            session([
                'logged_in' => true,
                'username' => $username,
            ]);

            return redirect('/home');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        session()->forget(['logged_in', 'username']);
        return redirect('/login');
    }
}
