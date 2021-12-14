
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Network - Edit Post</title>
</head>
<body>
    
@extends('layouts.app')
    <nav class="bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="" class="flex items-center py-5 px-2 text-gray-700">
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

<div>
   
    <form action="/editpost/{{$post->id}}" enctype="multipart/form-data" method="POST">
        @method('PATCH')
        @csrf
        

       


        
        <form method="POST" action="{{ route('post.update', ['id' => $post->id]) }}" >
           
            <div class="form-group">
                <textarea class="form-control min-w-full" name="body" id="edit-post" rows="5" placeholder="Enter your post here..."></textarea>
            </div>
            <button type="submit" class="float-right py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">Update Post</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>

        
    </form>
    
</div>


@endsection


</body>
</html>