<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, arahkan ke halaman beranda atau halaman yang dituju sebelumnya
            return redirect()->intended('/article');
        }
    
        // Jika otentikasi gagal, kembalikan input sebelumnya dan tampilkan pesan kesalahan
        return redirect('signup')->with('error', 'Invalid username or password');
    }
    


    public function logout(Request $request)
    {
        Auth::logout(); // Melakukan logout pengguna
        return redirect('signup'); // Redirect ke halaman login setelah logout
    }

    public function create(Request $request) {


        if ($request->input('code') == 'sdwk1234') {
            $data = new User();
            $data->username = $request->input('username');
            $data->password = bcrypt($request->input('password')); // Gunakan bcrypt() untuk meng-hash password
        } else {
            return redirect('createacc')->with('error', 'Invalid username or password');
        }
        
        
        $data->save();


        return redirect('signup')->with('error', 'Invalid username or password');
        

    }

}
