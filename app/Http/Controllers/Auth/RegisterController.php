<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
        {
        //request object to defer to the email
        //dd($request->email);

        //built -in validation from laravel
        $this->validate($request, [
            'name'=> 'required|max:255',
            'username'=> 'required|max:255',
            'email'=> 'required|max:255',
            'password'=> 'required|confirmed',

        ]);
        dd('store');
        }
}
