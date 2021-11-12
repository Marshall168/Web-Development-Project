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
            background-color: #121212;
            background-image: linear-gradient(315deg, #111827 0%, #374151 80%);
            

        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family: 'Lato', sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Welcome</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
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
                <div class="">
                    <a href="#" class="text-right">Forgot your password?</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>