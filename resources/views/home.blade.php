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
                        <a href="dashboard" class="flex items-center py-5 px-2 text-gray-700">
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
    <!-- hero -->

        <!-- Header-->
        <header class="container-md px-5">
            <div class="">
                <div class="bg-light text-center">
                    <div class="m-4 m-lg-5 text-blue-600">
                        <h1 class="display-5 fw-bold text-2xl">Welcome.</h1>
                        <p class="fs-4">The Network is a quick and easy way to stay connected with friends and family.</p>
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
                                    <h2 class="fs-4 fw-bold text-blue-600 font-bold">Free to Use!</h2>
                                    <p class="mb-0 text-gray-600">It's free, and always will be!</p>
                                </div>
                            </div>
                        </div>
                        <!--
                    <img src="/imgs/landing1.jpg" alt="Free Image" class="object-scall-down h40 w-96 shadow-xl rounded-2xl"> -->
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-gray-100 border-0 h-100 rounded-2xl">
                                <div class="card-body flex flex-col ml-7 text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                    <h2 class="fs-4 fw-bold text-blue-600 font-bold">Friendly UI</h2>
                                    <p class="mb-0 text-gray-600">Easy to understand and navigate, as it should be!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-gray-100 border-0 h-100 rounded-2xl">
                                <div class="card-body flex flex-col ml-7 text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                    <h2 class="fs-4 fw-bold text-blue-600 font-bold">Join Over 2,000+ Users in this Startup Project!</h2>
                                    <p class="mb-0 text-gray-600">This will soon be a big platform, be one of the first and be rewarded for it!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-gray-100 border-0 h-100 rounded-2xl">
                                <div class="card-body flex flex-col ml-7 text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                    <h2 class="fs-4 fw-bold text-blue-600 font-bold">Get Started Now!</h2>
                                    <p class="mb-0 text-gray-600">Press the 'Sign Up' button at the top right of the page to Get Started!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                

                </div>

                <div class="space-x-7 text-2xl text-center pt-8 text-blue-600">
                        <a href="https://www.facebook.com">
                            <ion-icon class="" name="logo-facebook">
                        </a>
                        <a href="https://www.twitter.com">
                            <ion-icon class="" name="logo-twitter">
                        </a>
                        <a href="https://www.linkedin.com">
                            <ion-icon class="" name="logo-linkedin">
                        </a>
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