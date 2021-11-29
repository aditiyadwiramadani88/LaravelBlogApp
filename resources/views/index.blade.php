<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/tal.css">
    <link class="icon" rel="shortcut icon" href="/img/icon.png" type="image/x-icon">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
/>


    <style>

      @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Nunito:ital,wght@0,300;0,400;1,300&display=swap');
      #menu-toggle:checked + #menu {
        display: block;
      }
      body { 
        font-family: 'Nunito', sans-serif;
      }
      
  </style>
</head>
<body class="bg-gray-50">

<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 shadow-lg">
    <div class="flex-1 flex justify-between items-center">
  
  </div>

   <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
  <input class="hidden" type="checkbox" id="menu-toggle" />

  <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
      <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 font-bold no-underline text-black" id="all_post" href="/all_post">All Post</a></li>
        @if(\Illuminate\Support\Facades\Auth::check())
        @if(\Illuminate\Support\Facades\Auth::user()->role == 1)

        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 font-bold no-underline text-black" id="create_post" href="/admin/create_post">Create Post</a></li>
        @endif 
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 font-bold no-underline 
        text-balck" href="/logout">Logout</a></li>
        @else 
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 font-bold no-underline text-balck" href="/login">Login</a></li>
        @endif

        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2 font-bold no-underline text-black" id="home" href="/">Home</a></li>
      </ul>
    </nav>
  </div>
  </header>

        <div class="container mx-auto">
        @if(session('success'))
        <div class="w-full bg-blue-200 text-center mt-10 pt-3 pb-3 rounded-b-lg ml-6 mr-6" id="message">
          {{session('success')}}
        </div>
        @endif

        @if(session('error'))
        <div class="w-full bg-red-400 text-center mt-10 pt-3 pb-3 rounded-b-lg ml-6 mr-6" id="message">
          {{session('error')}}
        </div>
        @endif
            @section('content')
            @show
        </div>

@section('home')

@show

<!-- Required font awesome -->
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
/>

<footer class="text-gray-600 body-font">
  <div
    class="
      px-5
      py-24
      mx-auto
      flex
      md:items-center
      lg:items-start
      md:flex-row md:flex-nowrap
      flex-wrap flex-col
    "
  >
    <div
      class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left"
    >
      <a
        href=""
        class="
          flex
          title-font
          font-medium
          items-center
          md:justify-start
          justify-center
          text-gray-900
        "
      >
        <span class="ml-3 text-xl">BlogSIte</span>
      </a>
      <p class="mt-2 text-sm text-gray-500">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi,
        quam?
      </p>
    </div>
    <div
      class="
        flex-grow flex flex-wrap
        md:pl-20
        -mb-10
        md:mt-0
        mt-10
        md:text-left
        text-center
      "
    >

    <div>
      
    </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-900
            tracking-widest
            text-sm
            mb-3
          "
        >
          Support
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Donate</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Follow instagram</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Follow github</a
            
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Follow twiiter</a
          </li>
        </nav>
      </div>

      
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2
          class="
            title-font
            font-medium
            text-gray-900
            tracking-widest
            text-sm
            mb-3
          "
        >
        Post Category
        </h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Teknology</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >Foot</a
            >
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800"
              >News</a
            >
          </li>

        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-100">
    <div
      class="
        container
        mx-auto
        py-4
        px-5
        flex flex-wrap flex-col
        sm:flex-row
      "
    >
      <p class="text-gray-500 text-sm text-center sm:text-left">
        @php echo date("Y") @endphp Copyright:
        <a
          href="https://github.com/aditiyadwiramadani88"
          class="text-gray-600 ml-1"
          target="_blank"
          >BlogSite</a
        >
      </p>
      <span
        class="
          inline-flex
          sm:ml-auto sm:mt-0
          mt-2
          justify-center
          sm:justify-start
        "
      >
        <a href="" class="text-gray-500">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="" class="ml-3 text-gray-500">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://github.com/aditiyadwiramadani88" class="ml-3 text-gray-500">
          <i class="fab fa-github"></i>
        </a>
      </span>
    </div>
  </div>
</footer>
      

        


        

  <script src="/js/editor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>
  
  <script src="/js/main.js"></script>
  

</body>
</html> 
 