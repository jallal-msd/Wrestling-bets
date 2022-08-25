@extends('layout')

   @section('content')
    <main>
        <div class="flex flex-col items-center justify-center my-20 p-5  ">
            
            <h1 class="text-3xl">Welcome</h1>
            <form method="POST"  action="/store" class="flex flex-col my-10 rounded-md  space-y-5  p-6">
                    @csrf
                <label for="name">Name</label>
                <input type="name" name="name" class="p-1 border-b-2 border-neutral-900">

                  <label for="email">Email</label>
                <input type="email" name="email" class="p-1 border-b-2 border-neutral-900">

                  <label for="password">Password</label>
                <input type="password"  name="password" class="p-1 border-b-2 border-neutral-900">

                  <label for="password_confirmation">Confirm password</label>
                <input type="password" name="password_confirmation" class="p-1 border-b-2 border-neutral-900">

                <input type="submit" class="bg-emerald-300 rounded-md p-5" value="Login">
            </form>
        </div>


    </main>

@endsection                   