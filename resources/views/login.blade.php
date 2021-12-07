<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Network - Login</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
       
    </style>
</head>
<body>
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
                        <a href="news" class="py-5 px-3 text-gray-700 hover:text-gray-900">News</a>
                        <a href="contact" class="py-5 px-3 text-gray-700 hover:text-gray-900">Contact</a>

                    </div>
                <!-- end primary -->

                </div>
                    <!-- secondary -->
                <div class="flex items-center space-x-1">
                    <a href="login" class="py-5 px-3 text-gray-700 hover:text-gray-900">Login</a>
                    <a href="sign" class="py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300">Sign Out</a>
                </div>
                    <!-- end secondary -->

            </div>  
        </div>
    </nav>

    <main class=" bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">The Network</h3>
            <p class="text-gray-600 pt-2 text-center"> Sign in to your account.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col " method="POST" action="#">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3 text-center" for="email">Email</label>
                    <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 outline-none focus:outline-none border-b-4 border-t-0 border-l-0 border-r-0 border-gray-300 focus:border-b-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3 text-center" for="password">Password</label>
                    <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-t-0 border-l-0 border-r-0 border-gray-300 focus:border-b-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <a href="homepage" class="py-3 px-3 bg-blue-500 hover:bg-blue-600 rounded text-white transition duration-300 text-center">Login</a>
                <div class="">
                    <a href="#" class="text-right">Forgot your password?</a>
                </div>
                <div class="font-bold">
                    <a href="sign" class="text-right">Not got an account? Sign Up.</a>
                </div>
            </form>
        </section>
    </main>


 <!-- footer -->
    <footer class="bg-gray-100 py-8 max-w-7x mx-auto">
        <div>
            <a class="justify-center align-items text-gray-700 flex mx-auto">Copyright Reserved</a>
        </div>
       
    </footer>
        
</body>

</html>

