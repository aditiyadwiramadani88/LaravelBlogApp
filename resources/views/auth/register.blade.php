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
                    <h1 class="text-2xl font-medium text-center md:text-4xl font-roboto">Welcome Too!</h1>
                </div>
                <div>
                    <div class="space-x-1 text-sm text-center md:text-base font-nunito">
                        <span>
                        Already have an account?
                        </span>
                        <a class="font-semibold text-blue-500" href="/login">Sign In</a>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <form class="text-base font-nunito" method="POST">

                @csrf
                    <div class="space-y-4">
                        @error('name')
                        <div class="text-red-600">{{$message}}</div>
                     @enderror
                        <div class="relative flex items-center">
                            <input
                                class="w-full p-2 text-gray-800 placeholder-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                                type="text" name="name" placeholder="Name" >
                        </div>
                        @error('email')
                                <div class="text-red-600">{{$message}}</div>
                             @enderror
                        <div class="relative flex items-center">
                            <input
                            class="w-full p-2 text-gray-800 placeholder-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                            type="email" name="email" placeholder="Email" >
                        </div>
                        @error('password')
                                <div class="text-red-600 mt-10">{{$message}}</div>
                             @enderror
                        <div class="relative flex items-center">
                            <input
                            class="w-full p-2 text-gray-800 placeholder-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                            type="password" name="password" placeholder="Password" >
                        </div>

                        @error('password_confirmation')
                           <div class="text-red-600">{{$message}}</div>
                        @enderror
                        <div class="relative flex items-center">
                            <input
                            class="w-full p-2 text-gray-800 placeholder-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                            type="password" name="password_confirmation" placeholder="Confrim Password" >
                        </div>

                        <input type="checkbox" name="remember" id="remember" class="hidden">
                       
                        <div>
                            <button
                                class="w-full p-2 text-sm font-semibold text-center text-white transition duration-100 rounded-md md:text-lg font-nunito bg-gradient-to-r from-blue-600 to-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-300 hover:shadow-lg">Sign
                                Up</button>
                                
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