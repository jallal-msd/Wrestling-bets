@extends('layout')

@section("content")
<main>
                      <div class="flex flex-col items-center justify-center my-20 p-5  ">
                    <form method ="POST" action="/authenticate"  class="flex flex-col my-10 rounded-md  space-y-5  p-6">
                        @csrf
                  <label for="email">Email</label>
                <input type="email" name="email" class="p-1 border-b-2 border-neutral-900">
                 @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                  <label for="password">Password</label>
                <input type="password"  name="password" class="p-1 border-b-2 border-neutral-900">

                <input type="submit" class="bg-black hover:bg-neutral-700  text-white rounded-md p-5" value="Login">
                    </form>
                </div>
           
        </main>
@endsection