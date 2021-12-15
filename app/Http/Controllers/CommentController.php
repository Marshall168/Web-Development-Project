<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('dashboard');
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
    /**
     * 
     *  public function store(Post $post)
       * {
        *$data = $request->validated();
        *$comment = new Comment();
        *$comment->post_id = $post->id;
   
    *    $comment->save();

     *   return $comment;
      *   }
     * 
     * 
     * 
     * 
     * 
     * 
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apiIndex($id)
    {
        
        $comment= Comment::all();
        return $comment;
    }

    public function apiStore(Request $request)
    {
        $c = new Comment;
        $c->user_id = $request['user_id'];
        $c->post_id = $request['post_id'];
        $c->body = $request['body'];
        
       
        $c->body = $request['body'];
        $c->save();
        
        return $c;
        
    }


    
    public function postCreateComment(Request $request, $id)
    {
        $this->validate($request,[
            'body' => 'required|max:250'
        ]);
        $comment = new Comment();
        $comment->body = $request['body'];




    }

    public function postComments(Request $request, $id)
    {
        $posts = Post::findOrFail($id);
        
        $comments = Comment::all();
        return view('posts.comments', ['posts' => $posts]);
    }

    public function page()
    {
        return view('posts.comments');
    }

    public function save()
    {
        //
    }
}
