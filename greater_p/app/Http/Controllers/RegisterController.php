<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Log;
use App\Models\User;

class RegisterController extends Controller
{
    public function viewRegister () {
        return view('registration');
    }
    public function storeUser (Request $request) {
        // dd($request->all());    
        $request->validate([
            'name' => 'required|string|unique:users|min:8|max:64',
            'email' => 'required|string|email|unique:users|min:8|max:64',
            'password' => 'required|confirmed|min:8|max:64',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'name' => $request->password_confirm,
        ]);

        Auth::login($user);
        
        return redirect('/',);
    }
    public function logout () {
        Auth::logout();
        return redirect('/');
    }
}
