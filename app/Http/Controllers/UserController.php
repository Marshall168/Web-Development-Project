<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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
        $user = User::findOrFail($id);
        return view('profile', ['user' => $user]);
    }
    
    public function index()
    {
        $users = User::all();
        return view('dashboard', ['users' => $users]);
    }

    public function getProfile()
    {
        return view('users.profile', ['users' => Auth::user()]);
    }

    public function postSaveProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->update();
        $file = $request->file('image');
        $filename = $request['name'] . '-' . $user->id . '.jpg';
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }

        return redirect()->route('profile');


    }
    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
}
