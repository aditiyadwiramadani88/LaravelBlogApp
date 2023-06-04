<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/tal.css">
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

<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 bg-gray-800 ">
    <div class="flex-1 flex justify-between items-center">

  </div>

   <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
  <input class="hidden" type="checkbox" id="menu-toggle" />

  <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
      <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400  no-underline text-white" id="all_post" href="/all_post">All Post</a></li>
        @if(\Illuminate\Support\Facades\Auth::check())
        @if(\Illuminate\Support\Facades\Auth::user()->role == 1)


        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400  no-underline text-white" id="create_post" href="/admin/create_post">Create Post</a></li>

        @endif
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400  no-underline
        text-white" href="/logout">Logout</a></li>
        @else
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400  no-underline text-white" href="/login">Login</a></li>
        @endif

        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2  no-underline text-white" id="home" href="/">Home</a></li>
      </ul>
    </nav>
  </div>
  </header>


<div class="w-full h-full">
            <dh-component class="h-full">
                <div class="flex flex-no-wrap">
                    <!-- Sidebar starts -->
                    <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
                    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                    <div style="min-height: 4000px;" id="sidebar-content" class="w-64 absolute sm:relative bg-gray-800 shadow md:h-full h-full flex-col justify-between hidden sm:flex">
                        <div class="px-8">

                            <ul class="mt-12">
                                <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">

                                        <span class="text-sm ml-2">Dashboard</span>
                                    </a>

                                </li>
                                <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/admin/create_post" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                        <span class="text-sm ml-2">Add Article</span>
                                    </a>

                                </li>
                                <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/all_post" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">

                                        <span class="text-sm ml-2">All Article</span>
                                    </a>
                                </li>

                                </li>
                                <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/admin/edit_user" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">

                                        <span class="text-sm ml-2">Edit Users</span>
                                    </a>
                                </li>
                                <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                    <a href="/admin/change_password" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">

                                        <span class="text-sm ml-2">Change Password</span>
                                    </a>
                                </li>



                            </ul>

                        </div>

                    </div>
                    <div class="w-64 z-40 absolute bg-gray-800 shadow md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out" id="mobile-nav">
                        <button aria-label="toggle sidebar" id="openSideBar" class="h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 rounded focus:ring-gray-800" onclick="sidebarHandler(true)">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <circle cx="6" cy="10" r="2" />
                                <line x1="6" y1="4" x2="6" y2="8" />
                                <line x1="6" y1="12" x2="6" y2="20" />
                                <circle cx="12" cy="16" r="2" />
                                <line x1="12" y1="4" x2="12" y2="14" />
                                <line x1="12" y1="18" x2="12" y2="20" />
                                <circle cx="18" cy="7" r="2" />
                                <line x1="18" y1="4" x2="18" y2="5" />
                                <line x1="18" y1="9" x2="18" y2="20" />
                            </svg>
                        </button>

                        <button aria-label="Close sidebar" id="closeSideBar" class="hidden h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white" onclick="sidebarHandler(false)">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>

                        <div class="px-8">

                            <ul class="mt-12">
                                <li class="flex w-full justify-between text-gray-300 hover:text-gray-500 cursor-pointer items-center mb-6">

                                <a href="/all_post" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                    <span class="text-sm ml-2">All Article</span>
                                </a>

                                </li>


                                <li class="flex w-full justify-between text-gray-300 hover:text-gray-500 cursor-pointer items-center mb-6">

                                <a href="/all_post" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                    <span class="text-sm ml-2">All Article</span>
                                </a>

                                </li>


                            </ul>


                        </div>


                    </div>

                    <!-- Sidebar ends -->
                    <!-- Remove class [ h-64 ] when adding a card block -->
                    <div class="container mx-auto py-10  md:w-4/5 w-11/12 px-6">
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

                        @section('sidebar')
                        @show
                    </div>
                </div>


                <script>
                    // var sideBar = document.getElementById("mobile-nav");
                    // var openSidebar = document.getElementById("openSideBar");
                    // var closeSidebar = document.getElementById("closeSideBar");
                    // sideBar.style.transform = "translateX(-260px)";

                    // function sidebarHandler(flag) {
                    //     if (flag) {
                    //         sideBar.style.transform = "translateX(0px)";
                    //         openSidebar.classList.add("hidden");
                    //         closeSidebar.classList.remove("hidden");
                    //     } else {
                    //         sideBar.style.transform = "translateX(-260px)";
                    //         closeSidebar.classList.add("hidden");
                    //         openSidebar.classList.remove("hidden");
                    //     }
                    // }

                    // window.addEventListener('scroll', function() {

                    //     const add_obstest = window.pageYOffset + 700
                    //     document.querySelector('#sidebar-content').style.minHeight =  add_obstest+'px';

                    // });



                </script>

            </dh-component>
        </div>


    <!-- <script src="/js/editor.js"></script>
 -->
 <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>

  <script src="/js/main.js"></script>
