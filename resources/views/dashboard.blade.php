<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Network - Dashboard</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist.js"></script>
@extends('layouts.app')
    <!-- Navbar -->
    <nav class="bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="users.dashboard" class="flex items-center py-5 px-2 text-gray-700">
                        <svg class="h-6 w-6 mr-2 text-gray-700 font-bold" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        <span class="font-bold">The Network</span>
                    </div>
                    <!-- end logo -->
                <!-- primary -->
                    <div class= "flex items-center space-x-1">
                    
                        <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Settings</a>
                        <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Notifications</a>

                    </div>
                <!-- end primary -->

                </div>
                    <!-- secondary -->
                <div class="col-md-8 pt-2">
                    <a href="profile" class="py-5 px-3 text-gray-700 hover:text-gray-900">Profile</a>
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
    <section class="row new-post px-16 ">
         <div class="col-md-6 col-md-offset-3">
             <header><h3 class="text-2xl uppercase text-blue-600">Whats going on?</h3></header>
             <form action="{{ route('post.create') }}" method="post">
                 <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Enter your post here..."></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">Update Post</button>
                 <input type="hidden" value="{{ Session::token() }}" name="_token">
             </form>
         </div>
    </section>
    <section class="row posts px-16 py-10 ">
        <div class="cold-md-6 col-md-offset-3">
            <header><h3 class="text-2xl uppercase text-blue-600">How are your friends doing?</h3></header>
            <article class="post py-5 rounded-2xl border-blue-600 border-l-2 space-y-2">
                <p class="pl-5 "> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <div class="italic text-gray-500 pl-5">
                        Posted by Scott on 5th December 2021
                    </div>
                    <div class="pl-5">
                        <a href="#">Like</a> -
                        <a href="#">Edit</a> -
                        <a href="#">Delete</a> -
                        <a href="#">Comment</a>
                    </div>
            </article>
            <article class="post py-10 rounded-2xl border-blue-600 border-l-2 space-y-2 ">
                <p class="pl-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <div class="italic text-gray-500 pl-5 ">
                        Posted by Scott on 5th December 2021
                    </div>
                    <div class="interaction pl-5">
                        <a href="#">Like</a> -
                        <a href="#">Edit</a> -
                        <a href="#">Delete</a> -
                        <a href="#">Comment</a>
                    </div>
            </article>

        </div>

    </section>
@endsection
</body>
</html>




