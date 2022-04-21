<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     // jika sudah login dan ingin kembali ke login page maka akan otomatis redirect ke halaman home
    //     $this->middleware('guest');
    // }
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attribute = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','min:4']
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect(RouteServiceProvider::HOME)->with('success', 'You are now logged in');
        }

        // $user = User::whereEmail($request->email)->first();
        // if($user) {
        //     // dd($user);
        //     if(Hash::check($request->password, $user->password)){
        //         Auth::login($user);
        //         return redirect('/')->with('success', 'You are now logged in');
        //     } 
        // } 
        // jika gagal maka lakukan ini
        throw ValidationException::withMessages([
            'email' => 'Your email is wrong',
        ]);

    }
}
