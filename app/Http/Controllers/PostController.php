<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Post::findOrFail($id);
     
       
        return view('posts.editpost', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        if (Auth::user() != $post->user){
            return redirect()->back();
        }
        $post->delete();
        return redirect('dashboard')->with(['message' => 'Post Deleted']);
    }

    public function getDashboard()
    {
        $posts = Post::paginate(5);
        return view('dashboard', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request,[
            'body' => 'required|max:250'
        ]);
        $post = new Post();
        $post->body = $request['body'];

        $message = 'There was an error';
        if ($request->user()->post()->save($post)){
            $message = 'Post successful!';

        }
        return redirect('dashboard')->with(['message' => $message]);
    }


    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $body = $request->input('body');
        $post->body = $body;
        $post->save();

        return redirect('dashboard');
        
    }
   
}
