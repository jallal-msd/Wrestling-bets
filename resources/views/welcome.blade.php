@extends('layout')


@section('content')
<main class="">
    <div class="flex flex-col md:flex-row items-center  justify-center gap-10 mx-auto p-5 my-28  ">
        
        <img src="{{asset('images/foto1.jpg')}}"  class="w-56 " alt="">
        <div class="">
          <table class="mx-auto  ">

          <thead>
            <tr class="mx-50">
              <th  class=" p-5">Wrestler</th>
              <th  class=" p-5">Score</th>
              <th  class="p-5" >Prize</th>
              <th  class="p-5">price</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($wreslters as  $wrestler)
            <tr>
              <td class=" p-5">{{$wrestler->name}} </td>
              <td class=" p-5">{{$wrestler->wins}}-{{$wrestler->lost}}</td>
              <td class=" p-5">{{$wrestler->prize}}</td>
              <td class=" p-5">{{$wrestler->price}}$</td>
             </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</main>

<section>
  
  <div class="flex flex-col items-center  justify-center ">
    <div class="container grid grid-cols-2 ">
      <div class="hidden md:flex  space-x-5 my-3">
        <div class="bg-red-500 p-5 ">06 June</div>
        <p class="text-lg text-neutral-900">30/11/2020 <span class="block">The First even start this year </span></p>
      </div>

      <div class="hidden md:flex  space-x-5 my-3">
        <div class="bg-red-500 p-5 ">06 June</div>
        <p class="text-lg text-neutral-900">30/11/2020 <span class="block">The First even start this year </span></p>
      </div>
      
     <div class="hidden md:flex  space-x-5 my-3">
        <div class="bg-red-500 p-5 ">06 June</div>
        <p class="text-lg text-neutral-900">30/11/2020 <span class="block">The First even start this year </span></p>
      </div>


      

  </div>


</section>

<section>
  
<div class="div flex flex-col md:flex-row  my-10  mx-auto p-2 justify-between ">
  @foreach ($wreslters as  $wrestler)
  <div class="flex flex-col items-center text-center  mx-auto ">
    <!--card-->

    <img src="{{asset('images/'.$wrestler->image)}}"  class ="w-30 h-40" alt="">
    <p class="p-3 text-neutral-900 font-bold rounded">{{$wrestler->name}}</p>
  </div>

  @endforeach
</div>

</section>



@endsection











 