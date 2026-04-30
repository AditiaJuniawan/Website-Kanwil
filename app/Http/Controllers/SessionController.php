<?php

namespace App\Http\Controllers;

use App\Models\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class SessionController extends Controller
{
    function index()
    {
        return view("/sesi/index");

    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'email wajib di isi',
            'password.required' => 'password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::Attempt($infologin)){
            //jika sukses
            return 'sukses';
        }
        else{
            //jika gagal
            // return 'gagal';
            return redirect('sesi')->with('error','email dan password invalid !');
        }
    }
}
