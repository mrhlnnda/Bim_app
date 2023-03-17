<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenjang' => $request->jenjang,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Session::flash('message', 'Register Success, Your Account has been Active.');
        return redirect('register');
    }
}