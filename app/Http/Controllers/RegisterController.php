<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'instance' => 'required|string',
            'phone' => 'required|string|min:8|max:11',
            'role' => 'required|string',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'instance' => $request->instance,
            'phone' => $request->phone,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
}
