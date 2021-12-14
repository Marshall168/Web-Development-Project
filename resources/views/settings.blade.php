<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Network</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .body-bg {
            
        }
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
    <!-- hero -->

        <!-- Header-->
        <header class="container-md px-5">
            <div class="">
                <div class="bg-light text-center">
                    <div class="m-4 m-lg-5 text-blue-600">
                        <h1 class="display-5 fw-bold text-2xl">Settings</h1>
                        <p class="fs-4">Unfortunately, we are currently working on this section! Please check back soon!.</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <div>
        
            <section class="pt-4 max-w-7xl mx-auto">
                <div class="container bg-blue-600 pb-10 px-5 py-5 rounded-2xl shadow-2xl space-y-5 mx-auto">
                    <div>

                    </div>
                    <!-- Page Features-->
                    <div class="row gx-lg-5 space-y-10 px-5">
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-gray-100 border-0 h-100 rounded-2xl">
                                <div class="card-body flex flex-col ml-7 text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                    <h2 class="fs-4 fw-bold text-blue-600 font-bold">Here is where your settings will be.</h2>
                                    <p class="mb-0 text-gray-600">This includes light/dark modes, privacy, blocked accounts and much more!</p>
                                    <p class="mb-0 text-gray-600">If you want to change basic user settings, press the 'Profile' button at the top right of the screen!</p>

                                </div>
                            </div>

                            <img src="/imgs/cogs.jpeg" alt="Settings Image" class="card rounded-3xl shadow-2-xl mx-auto pt-10 max-w-xl max-h-xl">
                        </div>
                        <!--
                    <img src="/imgs/landing1.jpg" alt="Free Image" class="object-scall-down h40 w-96 shadow-xl rounded-2xl"> -->
                

                </div>

            
            </section>

        </div>
        
    <!-- end hero -->
    <footer class="w-full bg-gray-100 text-blue-600 text-center bottom-0 fixed h-20 pt-8">
        <h2 class="">
            The Network, 2021
        </h2>
    

    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>