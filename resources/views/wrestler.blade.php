@extends('layout')

@section('content')

	<main>
  
  <div class="flex flex-col items-center  h-screen justify-center ">
    <div class="container flex">
      <div class=" md:flex   space-x-5 my-3">
      	@foreach($bets as $bet)

        <div class="flex flex-col items-center align-baseline bg-neutral-600 p-5 rounded-lg">

        	<img src="{{asset('images/'.	$wrestler[$bet->wrestler_id] ->image)}}" alt=" " class="h-28 w-24 my-6">
        	<p>How much you Bet : {{$bet->amount}}</p>
        	<p>Name of wrestler : {{$wrestler[$bet->wrestler_id] ->name}}</p>


        	  <form method="POST" action="/bet/{{$bet->id}}">
		        @csrf
		        @method("DELETE")
		        <button class="text-red-500 my-5 p-2"><i class="fa-solid fa-trash">Delete</i></button>
		    </form>
        </div>

        @endforeach
      </div>
      
  </div>
</div>
</main>

@endsection