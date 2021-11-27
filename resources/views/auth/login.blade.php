<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tal.css">
    
    <title>Document</title>
</head>

<body class="bg-gradient-to-r from-indigo-500 to-indigo-300">
    <div class="flex h-screen text-gray-900">
        <div class="w-11/12 p-8 m-auto bg-white rounded-lg sm:w-96 bg-opacity-80 bg-clip-padding">
            <div class="space-y-2">
                <div>
                    <h1 class="text-2xl font-medium text-center md:text-4xl font-roboto">Welcome Back!</h1>
                </div>
                <div>
                    <div class="space-x-1 text-sm text-center md:text-base font-nunito">
                        <span>
                        Don't have an account yet?
                        </span>
                        <a class="font-semibold text-blue-500" href="/register">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <form class="text-base font-nunito" method="POST">
                    @csrf
                    <div class="space-y-4">
                        @error('email')
                           <div class="text-red-600">{{$message}}</div>
                        @enderror
                        <div class="relative flex items-center">
                            <svg class="absolute w-5 h-5 ml-3 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <input
                                class="w-full p-2 pl-10 text-gray-800 placeholder-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                type="email" name="email" placeholder="Email" >
                        </div>
                        @error('password')
                           <div class="text-red-600">{{$message}}</div>
                        @enderror
                        <div class="relative flex items-center">
                            <svg class="absolute w-5 h-5 ml-3 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <input
                                class="w-full p-2 pl-10 text-gray-800 placeholder-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                type="password" name="password" placeholder="Password" >
                        </div>
             
                        <input type="checkbox" name="remember" id="remember" class="hidden">
                       
                        <div>
                            <button
                                class="w-full p-2 text-sm font-semibold text-center text-white transition duration-100 rounded-md md:text-lg font-nunito bg-gradient-to-r from-blue-600 to-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-300 hover:shadow-lg">Sign
                                In</button>
                        </div>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="/" class="text-blue-500">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelector('#remember').checked = true
    </script>
</body>
</html>