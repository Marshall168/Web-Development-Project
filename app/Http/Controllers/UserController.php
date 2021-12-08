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

    public function show(User $user)
    {
        return $user;
    }
}
