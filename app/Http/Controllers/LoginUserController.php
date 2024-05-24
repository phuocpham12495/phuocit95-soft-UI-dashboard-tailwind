<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{
    public function create() {
        return view("signin");
    }

    public function store() {
        //validate
        $attributes = request()->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        //attempt to login the user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                "signin" => "Sorry, those credentials do not match."
            ]);
        }

        //regenerate the session token
        request()->session()->regenerate(); //prevent from Session Hijacking

        //redirect
        return redirect("/dashboard");
    }

    public function destroy() {
        Auth::logout();
        return redirect("/");
    }
}
