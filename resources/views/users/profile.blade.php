<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Network - Profile</title>

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
                        <a href="dashboard" class="flex items-center py-5 px-2 text-gray-700">
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
                    
                    <a href="" class="py-5 px-3 text-gray-700 hover:text-gray-900">Profile</a>
                    <a href="logout" type="submit" class="btn btn-primary py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">
                        Sign Out
                    </a>
                </div>
                    <!-- end secondary -->

            </div>  
        </div>
    </nav>
@section('content')
<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl container">
    <section>
        <h3 class="font-bold text-2xl text-center">The Network</h3>
        <p class="text-gray-600 pt-2 text-center"> Profile</p>

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
                    <h1><h1>
                </div>
            </div>
        </div>
    </div>

    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            
            <form action="{{ route('profile.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group mb-6 pt-3 mx-auto">
                    <label class="col-md-4 col-form-label text-md-right" for="name">Name</label>
                    <input type="text" name="name" class="form-control bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300" value="{{ $users->name }}" id="name">
                </div>
                <div class="form-group mb-6 pt-3 mx-auto">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <button type="submit" class="btn py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">Save</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
            
        </div>

        @if (Storage::disk('local')->has($user->name . $user->id . '.jpg'))
            <section class="container w-full">
                <div class="w-full container">
                    <img src="{{ route('profile.image', ['filename' => $user->name . $user->id . '.jpg']) }}" alt="test" class="">
                </div>
                
            </section>
        @endif
            <div class="p-5">
                <a href="dashboard" type="submit" class="btn btn-primary py-3 px-3 bg-blue-500 hover:bg-blue-600 space-y-6 rounded text-white transition duration-300">
                    Back to Dashboard
                </a>
            </div>

    </section>

    
@endsection

</main>

</body>
</html>




