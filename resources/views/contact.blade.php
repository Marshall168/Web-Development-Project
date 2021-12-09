<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Network - Contact</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .body-bg {
            
        }
    </style>

</head>
<body class="antialiased bg-gray-100">
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
    <!-- hero -->
    <div class="flex w-full min-h-screen justify-center items-center">
        <div class="flex flex-col space-y-6 bg-blue-600 w-full max-w-4xl p-8 rounded-xl shadow-lg text-white">
        <div class="flex flex-col space-y-8 justify-between">
            <div class="font-bold text-4xl tracking-wide text-center">
                <h1>Contact Us</h1>
                <p class="pt-5 text-white text-sm"> Having trouble? Don't be afraid to get in touch!</p>
            </div>
            <div class="inline-flex space-x-2 items-center">
                <ion-icon class="text-white text-xl" name="call"></ion-icon>
                <span>07XXX XXXXXX</span>
            </div>
            <div class="inline-flex space-x-2 items-center">
                <ion-icon class="text-white text-xl" name="location"></ion-icon>
                <span>43, Highwood Avenue, Swansea, SAX 4XX</span>
            </div>
            <div class="inline-flex space-x-2 items-center">
                <ion-icon class="text-white text-xl" name="mail-open"></ion-icon>
                <span>contact@thenetwork.co.uk</span>
            </div>
        </div>
        <div class="space-x-7">
            <a href="#">
                <ion-icon class="" name="logo-facebook">
            </a>
            <a href="#">
                <ion-icon class="" name="logo-twitter">
            </a>
            <a href="#">
                <ion-icon class="" name="logo-linkedin">
            </a>
        </div>
        <div>
            <div class="bg-white rounded-xl shadow-lg p-8 text-gray-600">
                <form action="" class="flex flex-col space-y-4">
                    <div class="">
                        <label 
                        for="" 
                        class="text-sm">Your Name</label>

                        <input 
                        type="text" 
                        placeholder="Your Name" 
                        class="ring-1 ring-gray-200 w-full rounded-md mt-2 px-4 py-2 outline-none focu:ring-2 focus:ring-blue-600"/>
                    </div>
                    <div>
                    <label 
                        for="" 
                        class="text-sm">Email</label>
                        <input 
                        type="email" 
                        placeholder="Email" 
                        class="ring-1 ring-gray-200 w-full rounded-md mt-2 px-4 py-2 outline-none focu:ring-2 focus:ring-blue-600"/>
                    </div>
                    <div>
                    <label 
                        for="" 
                        class="text-sm">Message</label>
                        <textarea 
                        placeholder="Type your message here..."
                        rows="5" 
                        class="ring-1 ring-gray-200 w-full rounded-md mt-2 px-4 py-2 outline-none focu:ring-2 focus:ring-blue-600"></textarea>
                    </div>
                    <button class=" text-white bg-blue-600 rounded-lg px-6 py-2 uppercase text-sm inline-block self-end">Submit</button>
        

                </form>

            </div>
        </div>

        </div>

        
    </div>
    <!-- end hero -->
 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>