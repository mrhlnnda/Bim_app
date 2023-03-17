<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthMahasiswaController extends Controller
{

    public function login(Request $request) {
        return view('login');
    }

    

    public function doLogin(Request $request) {

        $validated = $request->validate([
            'nim' => 'required|exists:mahasiswa|max:255',
            'password' => 'required',
        ]);
 
        if (Auth::guard('mahasiswa')->attempt($validated)) {
            return redirect()->intended('dashboard');
        }

        
        return redirect()->with('error', 'Incorrect nim or password');
    }
}
