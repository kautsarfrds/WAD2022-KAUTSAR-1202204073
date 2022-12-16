<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   

    public function RegisterKautsar()
    {
        return view('RegisterKautsar');
    }

    public function RegisterKautsar_action(Request $request)
    {
        $data = $request->all();

        User::create([
            'nama' => $data['name'],
            'no_hp' => $data['NoHp'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect()->route('LoginKautsar')->with('success', 'Registration success. Please login!');
    }


    public function LoginKautsar()
    {
    
        return view('LoginKautsar');
    }

    public function LoginKautsar_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

    public function profile()
    {
        return view('ProfileKautsar');
    }

    public function profile_action(Request $request)
    {   
        
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'password_baru' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->nama = $request->nama;
        $user->no_hp = $request->no_hp;
        $user->password = Hash::make($request->password_baru);
        $user->save();
        $request->session()->regenerate();
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function listcar()
    {
        return view('ListCarKautsar');
    }

    public function add()
    {
        return view('AddKautsar');
    }
}