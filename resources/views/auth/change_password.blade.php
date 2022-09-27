@extends("sidebar")
@section('sidebar')



<div class="mt-4 mr-7 ml-6">
    <h1>Edit Users</h1>
<form method="POST">

@csrf
    
    <div class="mt-6">
    <label for="your_password" class="ml-2 mt-2 text-bold">Your Passeword</label>
    @error('your_passowrd')
    <div class="text-red-600">{{$message}}</div>
    @enderror
        <input type="password" name="your_passowrd" id="your_password"   class="rounded-lg mx-auto bg-white w-full h-10 shadow-lg otline-none focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div class="mt-6">
    <label for="password" class="ml-2 mt-2 text-bold">Passwod</label>
    @error('password')
    <div class="text-red-600">{{$message}}</div>
    @enderror
        <input type="password" name="password" id="password"  class="rounded-lg mx-auto bg-white w-full h-10 shadow-lg otline-none focus:outline-none focus:ring focus:border-blue-300" >
    </div>

    <div class="mt-6">
    <label for="password_confirmation" class="ml-2 mt-2 text-bold">Confrim Password</label>
    @error('password_confirmation')
    <div class="text-red-600">{{$message}}</div>
    @enderror
        <input type="password" name="password_confirmation" id="password_confirmation" class="rounded-lg mx-auto bg-white w-full h-10 shadow-lg otline-none focus:outline-none focus:ring focus:border-blue-300" >
    </div>

    <div class="mt-6">
        <button type="submit" class="w-full h-10 bg-purple-800 shadow-lg rounded-lg text-white focus:border-purple-800">Submit</button>
    </div>

</form>
</div>


@endsection