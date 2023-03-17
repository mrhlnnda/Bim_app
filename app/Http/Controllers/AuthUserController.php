<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthUserController extends Controller
{

    public function login(Request $request) {
        return view();
    }

    

    public function doLogin(Request $request) {
        $validated = $request->validate([
            'nik' => 'required|exists:admin|max:255',
            'password' => 'required',
        ]);
 
        if (Auth::guard('admin')->attempt($validated)) {
            return redirect()->intended('dashboard');
        }

        
        return redirect()->with('error', 'Incorrect nim or password');
    }
}
