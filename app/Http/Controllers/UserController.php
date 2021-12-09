<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;

class UserController extends Controller
{
    public function edit()
    {

    }

    public function update(Request $request)
    {
    

    }

    public function show($id)
    {
        $animal = User::findOrFail($id);
        return view('profile', ['user' => $user]);
    }
    
    public function index()
    {
        $users = User::all();
        return view('dashboard', ['users' => $users]);
    }
}
