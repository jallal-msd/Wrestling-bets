<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Emoney bets </title>
</head>
<body class="bg-amber-50 ">
    
<nav class="bg-gradient-to-b from-amber-400 to-amber-50 ">
    <div class="container flex items-center justify-between mx-auto p-3 ">
        <a href="/" class="  focus:outline-none focus-visible:ring-4 ring-neutral-900  ring-offset-4 ring-offset-amber-500 lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:top-0 lg:-z-20" >
             <img src="{{asset('images/logo.svg')}}" alt="" class="- h-30 w-40  lg:h-52 w-64   ">
        </a>

        <button id="Menu" class="lg:hidden hover:text-neutral-500 focus:outline-none 
      focus-visible:ring-4 ring-neutral-900  
      ring-offset-4 ring-offset-amber-500" aria-expanded="false" >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
     </button>
        <div role="dropDown" class="  hidden   flex-col  bg-gradient-to-b from-amber-50 to-amber-400   gap-4 absolute left-0 right-0 top-20  shadow-xl lg:shadow-none text-center items-center p-2  italic font-medium lg:flex lg:flex-row lg:static   lg:bg-none lg:w-full lg:justify-between  ">
       
            <a href="/" class="focus:outline-none focus-visible:ring-2 ring-amber-500 rounded-md  ring-offset-4 ring-offset-amber-500 ">Home</a>

            <a href="wrs" class="focus:outline-none focus-visible:ring-2 ring-amber-500 rounded-md  ring-offset-4 ring-offset-amber-500 ">Werstalers</a>

            <a href="bet" class="focus:outline-none focus-visible:ring-2 ring-amber-500 rounded-md  ring-offset-4 ring-offset-amber-500 ">bets</a>

            @auth
           <i><form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-arrow-right-from-bracket "><span class="mx-3">Logout</span></i>
                        </button>
                    </form>
                    </i>
             @else
              <a href="login" class="focus:outline-none focus-visible:ring-2 ring-amber-500 rounded-md  ring-offset-4 ring-offset-amber-500  fa-solid fa-arrow-right-to-bracket  "><span class="mx-3">Login</span></a>
            <a href="register" class="focus:outline-none focus-visible:ring-2 ring-amber-500 rounded-md  ring-offset-4 ring-offset-amber-500 fa-solid fa-registered "><span class="mx-3">Register</span></a>
            @endauth

        </div>
    </div>
</nav>



@yield('content')



<footer class="p-4 bg-white rounded-lg shadow  text-black md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class="text-sm  sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Emoney bets </a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>




 <script >

  const menu = document.querySelector('#Menu');
 const menuBar = document.querySelector('[role="dropDown"]');


menu.addEventListener('click', ()=>{

const isExpanded = JSON.parse(menu.getAttribute('aria-expanded'));

  menu.setAttribute('aria-expanded', !isExpanded);
  menuBar.classList.toggle('hidden');
  menuBar.classList.toggle('flex');
})
  </script>
</body>
</html>