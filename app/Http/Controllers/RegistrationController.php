<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(RegisterRequest $request) {
        User::create($request->all());
        // session()->flash('success', 'you are now register');
        return redirect('/')->with('success', 'you are now register');
    }
}
