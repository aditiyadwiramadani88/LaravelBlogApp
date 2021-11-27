@extends('index')
@section('content')

<div class="mt-4 mr-7 ml-6">
<form method="POST">

@csrf
    
    <div class="mt-6">
    <label for="title" class="ml-2 mt-2 text-bold">Title</label>
    @error('title')
    <div class="text-red-600">{{$message}}</div>
    @enderror
        <input type="text" name="title" id="title" value="{{old('title')}}"  class="rounded-lg mx-auto bg-white w-full h-10 shadow-lg otline-none focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div class="mt-6">
    <label for="content" class="ml-2 mt-2 text-bold">Content</label>
    @error('content')
    <div class="text-red-600">{{$message}}</div>
    @enderror
    
    <div id="editorjs" class="shadow-lg rounded-lg bg-white" name="content"></div>
    <input type="text" name="content" id="content" class="hidden" value="{{old('content')}}">

    <div class="mt-6">

        <button type="submit" class="w-full h-10 bg-purple-800 shadow-lg rounded-lg text-white focus:border-purple-800">Submit</button>
    </div>

</form>
</div>



@endsection
