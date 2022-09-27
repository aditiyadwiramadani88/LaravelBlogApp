
@extends('index')
 
@section('home')
 <div class=" container-lg mx-auto">
      <div class="w-full">
          <div class="grid md:grid-cols-2  gap-x-86 md:ml-4">
              <div class="ml-2 mt-6 pt-16 mx-auto">
                <p class="text-3xl text-blue-400"><b class="text-blue-400">Blog</b><b class=" text-red-400">Site</b></p>
                <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio debitis totam doloribus eligendi minima neque, veniam perferendis voluptates alias suscipit, deleniti cumque, itaque maiores eos? Nam molestias blanditiis debitis veniam. lore Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio debitis totam doloribus eligendi minima neque</p>

                <button class="bg-blue-500 text-white h-9 w-28 shadow-md rounded-md cursor-pointer" onclick="location.href='/all_post'">Get Start</button>
              </div>
              <div class="flex justify-center">
                  <img class=" cursor-pointer" src="/img/business-blogging-concept-commercial-blog-posting-internet-blogging-service-flat-design-illustration-vector-removebg-preview.png" alt="image">
              </div>
          </div>
      </div>
  </div>

@endsection