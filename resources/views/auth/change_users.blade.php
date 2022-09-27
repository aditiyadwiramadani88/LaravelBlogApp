@extends("sidebar")
@section('sidebar')



<div class="mt-4 mr-7 ml-6">
    <h1>Edit Users</h1>
<form method="POST">

@csrf
    
    <div class="mt-6">
    <label for="title" class="ml-2 mt-2 text-bold">Name</label>
    @error('name')
    <div class="text-red-600">{{$message}}</div>
    @enderror
        <input type="text" name="name" id="name" value="{{$row->name}}"  class="rounded-lg mx-auto bg-white w-full h-10 shadow-lg otline-none focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div class="mt-6">
    <label for="email" class="ml-2 mt-2 text-bold"></label>
        <input type="text" name="email" id="email" value="{{$row->email}}"  class="rounded-lg mx-auto bg-white w-full h-10 shadow-lg otline-none focus:outline-none focus:ring focus:border-blue-300" disabled>
    </div>

    <div class="mt-6">
        <button type="submit" class="w-full h-10 bg-purple-800 shadow-lg rounded-lg text-white focus:border-purple-800">Submit</button>
    </div>

</form>
</div>


@endsection