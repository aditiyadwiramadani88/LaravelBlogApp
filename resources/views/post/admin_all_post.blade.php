@extends('sidebar') 
@section('sidebar')





<form action="/search">
<div class="mt-6">

    <div class="flex">
        
        <input type="text" name="keyword" id="keyword" value="{{old('keyword')}}"   class="rounded-lg mx-auto bg-white md:w-full w-3/4 h-10 shadow-lg otline-none focus:outline-none focus:ring focus:border-blue-300 ">
        <button class=" bg-blue-800 text-white w-24 h-10 rounded-lg shadow-lg ml-2" type="submit">Search</button>
    </div>
</div>
</form>


<div class="grid place-items-center grid-cols-1 gap-10 xl:grid-cols-2 lg:grid-cols-2 mt-11 2xl:grid-cols-3"> 
    @foreach($row as $data)
    <div class=" place-items-center bg-white shadow-md rounded-xl overflow-hidden 2xl:max-w-screen-2xl  max-w-md mx-auto md:max-w-2xl h-48 w-full justify-self-center" >
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold ml-2 mt-7 mb-2">
            <a href="/post/{{$data->slug}}" class="hover:underline">{{$data->title}}</a>
        </div>
        <div class="ml-4 mb-5 mr-2">
            <p class="hidden all_content_get">{{ $data->content }}</p>
            <p class="all_content"></p>
            @if(\App\Models\View::where('slug_post', $data->slug)->first()) 
            <div class="flex justify-self-start inline-block">
                <i class="fa fa-eye"> {{ \App\Models\View::where('slug_post', $data->slug)->first()->total_views}}</i>
                
            </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
            @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
            <div class="flex justify-end justify-self-end">
                <form action="/admin/delete_post/{{$data->slug}}" class="inline-block" method="POST">
                @method("DELETE")
                @csrf
                    <div class="inline-block">   
                        <a href="/admin/update_post/{{$data->slug}}" class="focus:underline"><img  src="/icons8-edit-50.png" alt="edit" srcset=""></a>
                    </div>
              <div class="inline-block"> 
                <button class="delete_post"><img src="/icons8-trash-20.png" alt=""></button></div>
            </form>
    </div>
    @endif
    @endif

        </div>

    </div>
    @endforeach
</div>

<div class="mt-16">   
        {{$row->links()}}
    </div>

@endsection

