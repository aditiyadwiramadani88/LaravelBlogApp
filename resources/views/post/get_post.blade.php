@extends('index')
@section('content')

        <section class="grid md:grid-cols-3 mt-12">
            <main class="col-span-2 relative md:mr-2">
             <h1 class="text-3xl font-bold text-gray-800">{{$row->title}}</h1>
             <div class="flex mt-2 my-2 items-center gap-4">
                 <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                 <div class="text-gray-500 font font-bold">
                     By <span class="text-gray-800 cursor-pointer">{{$row->author}}</span> on {{$row->time}}
                 </div>
             </div>

             <div class="hidden get_content_detail" >{{$row->content}}</div>
             <!-- <blockquote class="italic font-semibold font-serif text-gray-800 border-l-4 border-gray-900 my-3 pl-2 ml-8">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo at expedita nam assumenda totam voluptas quibusdam repudiandae. Culpa mollitia dolor illo dolorum ipsum expedita ea nemo quasi soluta hic.
                 
             </blockquote> -->
             <article></article>
             <form id="comment">
                 <textarea placeholder="your comment" cols="5" rows="6" class="outline-none focus:outline-none text-xl bg-gray-100 rounded p-4 text-gray-800 font-semibold w-full"></textarea>
                 <input type="email" class="w-full bg-gray-100 p-2 my-2 px-4 text-xl text-gray-800 rounded focus:outline-none" placeholder="your email" required="true " />
                 <input type="text" class="w-full bg-gray-100 p-2 px-4 text-xl text-gray-800 rounded focus:outline-none" placeholder="your name" required="true " />
                 <button class="my-2 py-2 text-xl text-center w-full bg-blue-700 text-gray-50 hover:bg-blue-600 focus:outline-none rounded" type="submit">Comment</button>
             </form>
            </main>
            
            <aside class="col-span-2 md:col-span-1 mt-4 md:mt-0">
            
                <div id="related-posts" class="grid gap-2">
                    <p class="text-3xl font-semibold border-l-4 my-8 border-gray-800 pl-2 text-gray-700">Related Posts</p>
                    <div class="grid grid-cols-2   border rounded-lg">
                        <div class=" md:col-span-2 lg:col-span-1">
                            <img src="/aaa.png" class="w-full h-auto" >
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 px-2 flex flex-col justify-center">
                            <p class="text-xl cursor-pointer">
                                <a href="single.html">
                                    While Loop in Javascript
                                </a>
                                </p>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. m, sapiente explicabo!</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2   border rounded-lg">
                        <div class=" md:col-span-2 lg:col-span-1">
                            <img src="/aaa.png" class="w-full h-auto" >
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 px-2 flex flex-col justify-center">
                            <p class="text-xl cursor-pointer">
                                <a href="single.html">
                                    Foreach Loop in Javascript
                                </a>
                            </p>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. m, sapiente explicabo!</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2   border rounded-lg">
                        <div class=" md:col-span-2 lg:col-span-1">
                            <img src="/aaa.png" class="w-full h-auto" >
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 px-2 flex flex-col justify-center">
                            <p class="text-xl cursor-pointer">
                                <a href="single.html">
                                    Map Loop in Javascript
                                </a>
                                </p>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. m, sapiente explicabo!</p>
                        </div>
                    </div>
                </div>
            </aside>  
          </section>

     
  

    <script> 
  
    </script>
    
      

@endsection