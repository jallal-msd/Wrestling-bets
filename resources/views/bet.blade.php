@extends('layout')

   @section('content')
    <main>
        <div class="flex flex-col items-center justify-center my-20 p-5  ">
            
            <h1 class="text-3xl">Place your bet on your favourite Wrestler </h1>
            <form method="POST"  action="/bet" class="flex flex-col my-10 rounded-md  space-y-5  p-6">
                    @csrf
                <label for="amount">Amount</label>
                <input type="number" name="amount" class="p-1 border-b-2 border-neutral-900">

               

                  <label for="wrestlers">Wrestlers</label>
                <select  name="wrestlers" class="p-1 border-b-2 border-neutral-900">
                    @foreach($wrestlers as $wrestler)
                    <option value="{{$wrestler->id}}">{{$wrestler->name}}</option>
                    @endforeach
                </select>

                <label for="wins">expectation</label>   
                <input type="checkbox" name="wins">Wins

                <input type="submit" class="bg-emerald-300 rounded-md p-5" value="Login">
            </form>
        </div>


    </main>

@endsection                   