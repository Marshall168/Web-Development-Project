<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <title>The Network - Dashboard</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


@extends('layouts.app')
    <!-- Navbar -->
    <nav class="bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="/dashboard" class="flex items-center py-5 px-2 text-gray-700">
                        <svg class="h-6 w-6 mr-2 text-gray-700 font-bold" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        <span class="font-bold">The Network</span>
                    </div>
                    <!-- end logo -->
                <!-- primary -->
                    <div class= "flex items-center space-x-1">
                    
                        <a href="/settings" class="py-5 px-3 text-gray-700 hover:text-gray-900">Settings</a>
                        <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Notifications</a>

                    </div>
                <!-- end primary -->

                </div>
                    <!-- secondary -->
                <div class="col-md-8 pt-2">
                    <a href="{{ route('profile') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Profile</a>
                    <a href="logout" type="submit" class="btn btn-primary py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">
                        Sign Out
                    </a>
                </div>
                    <!-- end secondary -->

            </div>  
        </div>
    </nav>


@section('content')

@include('layouts.message')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                    </div>

                </div>
            </div>
        </div>
    </div>
   
    <section class="">
  
        <article class="py-5 rounded-2xl border-blue-600 border-2 shadow-xl space-y-2 mb-5 bg-gray-100 ">
            <p class="text-center text-4xl "> {{ $posts->body }} </p>
            <div class="italic text-gray-500 text-center border-b-2 border-blue-600 pb-5 rounded-xl">
                            Posted by {{ $posts->user->name}} on {{ $posts->created_at }}
                    </div>
            <br> 


            <div id="comments">
                
                
                <ul class="">
                    <li  class=" text-2xl text-gray-600 text-center" v-for="comment in comments"> 
                    @{{ comment.body }}
                
                </li>
                </ul>
                <br> <br>
                <h2 class="text-blue-600 pl-5">Comment Below</h2>
                <input type="text" id="body" v-model="newCommentBody" class="rounded-xl ml-5 w-4/5" placeholder="Enter Comment here...">
                <input type="hidden" id="post_id" value="{{$posts->id}}" v-model="postId">
                <input type="hidden" id="user_id" value="{{Auth::id()}}" v-model="userId">
                
                <button class="py-2 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300 ml-5" @click="createComment">Comment</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">


            </div>

            <br> <br>
            <a href="/dashboard" class="text-white mt-5 pl-5 uppercase py-2 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300 ml-5">Back to Dashboard</a>

        </article>

        
    </section>

    
                <script>
                    var app = new Vue({
                        el: "#comments",
                        data: {
                            comments: [],
                            newCommentBody: '', 
                            postId: {{$posts->id}},
                            userId: {{Auth::id()}},
                        },
                        methods:{
                            createComment:function(){
                                axios.post("{{ route('api.comments.store') }}",
                                {
                                    body: this.newCommentBody, 
                                    post_id: this.postId,
                                    user_id: this.userId,
                                })
                                .then(response=>{
                                    this.comments.push(response.data);
                                    this.newCommentBody='';
                                    this.postId = {{$posts->id}};
                                    this.userId = {{Auth::id()}};
                                }).catch(response=>{
                                    console.log(response);
                                })
                            }
                        }
                    })
                </script>


   
@endsection
</body>
</html>




