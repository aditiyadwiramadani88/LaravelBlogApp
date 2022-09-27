

@extends('index')
@section('content')

        <section class="grid md:grid-cols-3 mt-12">
            <main class="col-span-2 relative md:mr-2">
             <h1 class="text-3xl font-bold text-gray-800 title">{{$row->title}}</h1>
             <div class="flex mt-2 my-2 items-center gap-4">
                 <div>
                     <img src="/img/users.png" class="w-10 h-10" alt="users">
                 </div>
                 <div class="text-gray-500 font font-bold">
                     By <span class="text-gray-800 cursor-pointer">{{$row->author}}</span> on {{$row->time}}
                 </div>
             </div>

             <div class="hidden get_content_detail" >{{$row->content}}</div>
             <!-- <blockquote class="italic font-semibold font-serif text-gray-800 border-l-4 border-gray-900 my-3 pl-2 ml-8">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo at expedita nam assumenda totam voluptas quibusdam repudiandae. Culpa mollitia dolor illo dolorum ipsum expedita ea nemo quasi soluta hic.
                 
             </blockquote> -->
             <article></article>
             <form id="comment" method="POST" action="/user/comment">
             @csrf
             <input type="hidden" name="post_slug" value="{{$row->slug}}">

                 <textarea placeholder="your comment" name="comment" cols="5" rows="6" class="outline-none focus:outline-none text-xl bg-gray-100 rounded p-4 text-gray-800 font-semibold w-full"></textarea>
                 @error('comment')
                <div class="text-red-600">{{$message}}</div>
                @enderror
                 
                 <button class="my-2 py-2 text-xl text-center w-full bg-blue-700 text-gray-50 hover:bg-blue-600 focus:outline-none rounded" type="submit">Comment</button>
             </form>

             @if(\App\Models\CommentModel::where('post_slug', $row->slug)->first())
             <div class=" mt-16 mb-16">
                 <p class=" text-3xl text-bold border-l-4 border-gray-800">Comment</p>

                @foreach(\App\Models\CommentModel::where('post_slug', $row->slug)->get() as $data)
                
                 <div class=" rounded-lg max-w-full flex">
                     <div class="mt-4">
                         <img src="/img/users.png"  width="50" height="50" alt="" srcset="" class=" inline-block">
                     </div>
                     <div class="">
                         <p class="bold ml-10 "><b>{{$data->name}}</b></p>
                         <p class="ml-10 mr-10 ">{{$data->comment}}</p>
                     </div>
                    </div>
                 
                 @endforeach
             </div>
             @endif
             
            </main>
            
            <aside class="col-span-2 md:col-span-1 mt-4 md:mt-0">
            
                @if(\App\Models\PostModel::all()->count() >= 3) 
                <div id="related-posts" class="grid gap-2">
                    <p class="text-3xl font-semibold border-l-4 my-8 border-gray-800 pl-2 text-gray-700">Related Posts</p>

                @foreach(\App\Models\PostModel::all()->random(3) as $data)
                    <div class="grid grid-cols-2   border rounded-lg">
                        <div class=" md:col-span-2 lg:col-span-1">
                            <img  class="w-full h-auto img" >
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 px-2 flex flex-col justify-center">
                            <p class="text-xl cursor-pointer">
                                <a href="/post/{{$data->slug}}">
                                        {{$data->title}}
                                </a>
                                </p>
                                <p class="hidden content_ren">{{$data->content}}</p>
                            <div class="text-gray-600 show_content_ren inline-block"></div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    
                </div>
                @endif
            </aside>  


          </section>

     
  
    <script> 

   



  
    </script>
    
      

@endsection