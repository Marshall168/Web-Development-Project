<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Network - Register</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    @extends('layouts.app')
     <!-- Navbar -->
 <nav class="bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="/" class="flex items-center py-5 px-2 text-gray-700">
                        <svg class="h-6 w-6 mr-2 text-gray-700 font-bold" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        <span class="font-bold">The Network</span>
                    </div>
                    <!-- end logo -->
                <!-- primary -->
                    <div class= "flex items-center space-x-1">
                    
                        <a href="contact" class="py-5 px-3 text-gray-700 hover:text-gray-900">Contact</a>

                    </div>
                <!-- end primary -->

                </div>
                    <!-- secondary -->
                <div class="flex items-center space-x-1">
                    <a href="login" class="py-5 px-3 text-gray-700 hover:text-gray-900">Login</a>
                    <a href="register" class="py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">Sign Up</a>
                </div>
                    <!-- end secondary -->

            </div>  
        </div>
    </nav>


    @section('content')

    
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Sign Up to The Network</h3>

        </section>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="name" class="form-control @error('name') is-invalid @enderror bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right ">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" placeholder="confirm password" class="form-control bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                            <div class="font-bold pt-5">
                                <a href="login" class="text-right">Already got an account? Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection

    
</body>
</html>

