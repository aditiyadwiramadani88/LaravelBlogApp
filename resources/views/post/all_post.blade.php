@extends('index') 
@section('content')


<div class="grid place-items-center grid-cols-1 gap-10 xl:grid-cols-3 lg:grid-cols-2 mt-11 2xl:grid-cols-4"> 
    @foreach($row as $data)
    <div class=" place-items-center bg-white shadow-md rounded-xl overflow-hidden 2xl:max-w-screen-2xl  max-w-md mx-auto md:max-w-2xl h-48 w-full justify-self-center" >
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold ml-2 mt-7 mb-2">
            <a href="/post/{{$data->slug}}" class="hover:underline">{{$data->title}}</a>
        </div>
        <div class="ml-4 mb-5 mr-2">
           
            <p class="hidden all_content_get">{{$data->content}}</p>
            <p class="all_content"></p>
            <div class="flex justify-end justify-self-end">
                <form action="/admin/delete_post/{{$data->slug}}" class="inline-block" method="POST">
                @method("DELETE")
                @csrf
                    <div class="inline-block">   
                        <a href="/admin/update_post/{{$data->slug}}" class="focus:underline"><img  src="/icons8-edit-50.png" alt="edit" srcset=""></a>
                    </div>
              <div class="inline-block"> 
                <button><img src="/icons8-trash-20.png" alt=""></button></div>
            </form>
    </div>
        </div>

    </div>
    @endforeach
</div>


@endsection

