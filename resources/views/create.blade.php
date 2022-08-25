@extends('layout')

   @section('content')
    <main>
        <div class="flex flex-col items-center justify-center my-20 p-5  ">
            
            <h1 class="text-3xl">Welcome</h1>
            <p class="text-md font-normal">Create your own wrestler </p>
            <form method="POST"  action="/create" class="flex flex-col my-10 rounded-md  space-y-5  p-6">
                    @csrf
                <label for="name">Name</label>
                <input type="name" name="name" class="p-1 border-b-2 border-neutral-900">

                  <label for="wins">win</label>
                <input type="number" name="wins" class="p-1 border-b-2 border-neutral-900">

                  <label for="lost">lost</label>
                <input type="number"  name="lost" class="p-1 border-b-2 border-neutral-900">

                 <label for="prize">prizw</label>
                <input type="text"  name="prize" class="p-1 border-b-2 border-neutral-900">

                 <label for="price">price</label>
                <input type="text"  name="price" class="p-1 border-b-2 border-neutral-900">

                 <label for="image">Image</label>
                <input type="file"  name="image" class="p-1 border-b-2 border-neutral-900">
                
                <input type="submit" class="bg-emerald-300 rounded-md p-5" value="Login">
            </form>
        </div>


    </main>

@endsection     