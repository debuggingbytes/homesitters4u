<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Check Ups & Inspections while you're away | HomeSitters4U.com</title>
  <meta property="og:url" content=""/>
  <meta property="og:title" content=""/>
  <meta property="og:description" content=""/>
  <meta property="og:type" content=""/>
  <meta property="og:image" content=""/>
  {{-- TailwindCSS --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  {{-- font awesome --}}
  <script src="https://kit.fontawesome.com/c5608c8cee.js" crossorigin="anonymous"></script>
</head>
<body class="transition-all duration-500 ease">
  {{-- Form Modal --}}
  <div id="formModal" class="hidden w-full h-full fixed top-0 bg-black/90 pointer-events-auto z-50 flex items-center justify-center transition-all duration-500 opacity-0 cursor-wait">
    <div class="text-black uppercase font-semibold w-1/4 bg-zinc-100/60 rounded-xl p-5">
      <p class="text-center mb-5">Are you a robot?</p>
      <div class="mx-auto w-1/2 block text-center p-3 bg-white rounded-full transition-all duration-500 ease">
        <input type="checkbox" name="robots" id="robotCheck" class="p-2">
        <span class="ml-5 hidden " id="notToday"><i class="fa-solid fa-check text-xl text-green-500"></i> Not Today!</span>
      </div>
    </div>
  </div>
  
  <header>
    <nav id="navbar"
        class="px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="https://albertacraneservice.com/" class="flex items-center z-10">
           HomeSitters4U
          </a>
          <button id="mobileNavBtn" class="inline-block md:hidden px-2 py-1 z-10">
            <i class="fa-solid fa-bars text-white text-2xl"></i>
          </button>

          {{-- Mobile Navigation --}}
          <div id="mobileNav" class="md:hidden z-1 fixed top-0 left-0 w-full h-full bg-sky-800 transition-all duration-500 ease mobile-nav">
            <div class="relative w-full h-full">
              <ul class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/4 text-start font-bold text-white w-2/3 mx-auto">
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl border-b-2 border-white">Home<i class="fa-solid fa-house absolute right-0 top-2"></i></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl border-b-2 border-white">Services<i class="fa-regular fa-handshake absolute right-0 top-2"></i></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl border-b-2 border-white">Inspections<i class="fa-solid fa-magnifying-glass absolute right-0 top-2"></i></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl border-b-2 border-white"><i class="fa-solid fa-question absolute right-0 top-2"></i> Faq</li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl"><i class="fa-regular fa-envelope absolute right-0 top-2"></i> contact</li>
              </ul>
            </div>
            
          </div>
          {{-- Desktop Navigation --}}
          <div class=" hidden justify-between items-center w-1/2 md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
              class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent items-center">
              <li>
                <a href="link" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase">home</a>
              </li>
              <li>
                <a href="link" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase">services</a>
              </li>
              <li>
                <a href="link" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase">inspections</a>
              </li>
              <li>
                <a href="link" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase">faq</a>
              </li>
              <li>
                <a href="link" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase">contact</a>
              </li>              
            </ul>
          </div>
        </div>
      </nav>
      <div id="hero" class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover hero-bg vh-75">
        <div
          class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed  transition transform duration-300 ease-in-out hover:backdrop-blur-sm hover:scale-1"
          style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="flex justify-center items-center h-full container md:w-100 mx-auto">
            <div class="text-white w-3/4">
              <h1 class="mb-10">
                <span class="block text-xl md:text-5xl text-white font-bold uppercase roboto drop-shadow-md tracking-widest">Providing</span>
                <span class="block text-xl md:text-5xl text-white font-bold uppercase roboto drop-shadow-md tracking-widest">Home check ups</span>
                <span class="block text-sm pt-3 md:pt-0 md:text-md text-white font-medium uppercase roboto drop-shadow-md tracking-widest">so you don't need to worry while you're away</span>
              </h1>
              <button class=" bg-sky-600 px-4 py-2 uppercase text-md font-medium text-white rounded-lg shadow-md">Find Out How</button>
            </div>            
          </div>
        </div>
      </div>
  </header>
  <main>
    {{-- up arrow --}}
    <a class="fixed z-10 bottom-5 right-5 hidden" href='#top' id="scrollTop">
      <i class="fa-solid fa-circle-chevron-up font-white fa-fade" style="--fa-animation-duration: 3s;"></i>
    </a>

    <section id="services" class="md:container md:mx-auto">
      <div class="pt-10 mx-5 md:mx-0">
        <h2 class="service-green text-3xl md:text-4xl font-semibold uppercase tracking-wide pb-5">Our Services</h2>
        <p class="py-2 md:text-lg pb-5 font-medium">HomeSitters4U wants to make sure you never have to worry about insurance claims if something were to happen. We provide robust services to ensure that your home is kept in tip top shape while you are away.  These services can include things such as Snow &amp; Ice removal, Lawn maintenance, smoke detector function checks, sump pump working conditions. We can even feed your goldfish if that helps you! plus so much more. </p>
        <div class="block w-100 mx-5 md:w-1/2 md:mx-auto py-5 mt-5 bg-slate-200 p-5 shadow rounded-lg slide-x relative" id="tip">
          <div class="absolute top-5 right-5">
            <i id="closeTip" class="fa-solid fa-square-xmark cursor-pointer text-red-500"></i>
          </div>
          <h5 class="text-md font-bold md:text-2xl w-100 text-center uppercase">Did you know?</h5>
          <p class="pt-2 text-base lg:text-xl">In order to minimize the risk, insurance companies often require a home to be checked in on every 48-72 hours. The exact period of time varies by insurer, so be sure you know what your home insurance policy requires.  HomeSitters4u provides the ability to meet those requirements. Allowing you to have peace of mind while you're away.</p>
        </div>
        {{-- start cards --}}
        <div class="grid grid-rows-3 lg:grid-rows-none lg:grid-cols-3 gap-3 md:gap-5 mt-20 mx-auto lg:mx-0">
          <div class="transition-all ease duration-500 hover:-translate-y-2 hover:drop-shadow-lg
          bg-slate-700 rounded-xl min-h-48 w-auto drop-shadow-md bg-gradient-to-br from-gray-300 via-green-300 to-green-500 shadow">
            <div class="px-10 py-5">
              <div class="flex justify-center align-center"> 
                <i class="fa-solid fa-house text-2xl lg:text-5xl"></i>
                <h3 class="pl-2 text-md md:pl-5 sm:text-xl md:text-3xl uppercase font-bold inline-block align-bottom">Home Check Ups</h3>
              </div>
              <p class="pt-5 font-bold text-sm md:text-xl">
                Looking for peace of mind?  Our home check up provides you with proof your house was taken care of while you were away.
              </p>
            </div>
            <div class="flex align-center justify-center w-100 pb-5">
              <button class="inline-block bg-zinc-50 text-sm rounded-full px-5 py-3 font-bold uppercase text-black shadow mx-auto w-100 transition-all duration-500 ease hover:ring-2 hover:ring-lime-500 hover:drop-shadow-lg
              hover:bg-gradient-to-b hover:from-zinc-100 hover:via-slate-200 hover:to-slate-200
              ">learn more</button>
            </div>            
          </div>
          
          <div class="transition-all ease duration-500 hover:-translate-y-2 hover:drop-shadow-lg 
          bg-slate-700 rounded-xl min-h-48 w-auto drop-shadow-md bg-gradient-to-br from-gray-300 via-green-300 to-green-500 shadow">
            <div class="px-10 py-5">
              <div class="flex justify-center align-center"> 
                <i class="fa-regular fa-snowflake text-2xl lg:text-5xl"></i>
                <h3 class="pl-2 text-md md:pl-5 sm:text-xl md:text-3xl uppercase font-bold inline-block align-bottom">maintenance</h3>
              </div>
              <p class="pt-5 font-bold text-sm md:text-xl">
                Looking for peace of mind?  Our home check up provides you with proof your house was taken care of while you were away.
              </p>
            </div>
            <div class="flex align-center justify-center w-100 pb-5">
              <button class="inline-block bg-zinc-50 text-sm rounded-full px-5 py-3 font-bold uppercase text-black shadow mx-auto w-100 transition-all duration-500 ease hover:ring-2 hover:ring-lime-500 hover:drop-shadow-lg
              hover:bg-gradient-to-b hover:from-zinc-100 hover:via-slate-200 hover:to-slate-200
              ">learn more</button>
            </div>            
          </div> 

          <div class="transition-all ease duration-500 hover:-translate-y-2 hover:drop-shadow-lg 
          bg-slate-700 rounded-xl min-h-48 w-auto drop-shadow-md bg-gradient-to-br from-gray-300 via-green-300 to-green-500 shadow">
            <div class="px-10 py-5">
              <div class="flex justify-center align-center"> 
                <i class="fa-solid fa-envelopes-bulk text-2xl lg:text-5xl"></i>
                <h3 class="pl-2 text-md md:pl-5 sm:text-xl md:text-3xl uppercase font-bold inline-block align-bottom">extra services</h3>
              </div>
              <p class="pt-5 font-bold text-sm md:text-xl">
                Looking for peace of mind?  Our home check up provides you with proof your house was taken care of while you were away.
              </p>
            </div>
            <div class="flex align-center justify-center w-100 pb-5">
              <button class="inline-block bg-zinc-50 text-sm rounded-full px-5 py-3 font-bold uppercase text-black shadow mx-auto w-100 transition-all duration-500 ease hover:ring-2 hover:ring-lime-500 hover:drop-shadow-lg
              hover:bg-gradient-to-b hover:from-zinc-100 hover:via-slate-200 hover:to-slate-200
              ">learn more</button>
            </div>            
          </div> 
        </div>
        {{-- end cards --}}
      </div>
    </section>
    <section id="inspections" class="mt-32 py-32">
      <div class="inspect-frame container mx-auto my-20 relative slide-x rounded-xl md:rounded-none p-2 md:p-20 lg:py-20 lg:px-5">        
        <div class="lg:flex lg:justify-center lg:items-center w-100 lg:min-h-96 ">
          <div class="hidden inspect-img lg:flex justify-center items-center">
            <img src="{{ asset('img/components/home-inspections-and-check-ups.png') }}" alt="Providin home check ups while youre away" class="triangle-gradient w-7/12 rounded-xl drop-shadow-md shadow">
          </div>
          <div class="inspect-text w-100 lg:w-2/3 items-start text-center md:text-start ">
            <h3 class="text-xl md:text-2xl xl:text-4xl uppercase font-semibold pb-1 mb-4">
              Your Home Check Up<i class="text-red-600 fa-solid fa-heart-pulse ml-3 fa-beat"></i>
            </h3>
            <p class="text-sm md:text-lg pb-5">When it comes to your house, we understand that its more than that.  Your house is your home, we want to make sure it stays that way while you are away.  We will check all the boxes when it comes to visiting your home. Function checking your smoke detectors, sump pumps, furnance pilot light. We can even gather your mail! </p>
            <ul class="list-style-none text-black text-start">
              <li class="text-sm md:text-md lg:text-2xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>hot water tank leaks</li>
              <li class="text-sm md:text-md lg:text-2xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>breaker panel trips</li>
              <li class="text-sm md:text-md lg:text-2xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>furnances</li>
              <li class="text-sm md:text-md lg:text-2xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>smoke detectors</li>
            </ul>
          </div>
        </div>
        <div class="absolute top-0 left-0 triangle-gradient w-full h-full pointer-events-none">
        </div>
      </div>
    </section>
    <section id="faq" class="lg:container mx-5 lg:mx-auto py-20">
      <h2 class="text-xl mb-5 md:mb-0 md:text-3xl tracking-wide uppercase service-green font-bold">Frequently Asked Questions</h2>
      <p class="text-md ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quod explicabo non dolorem in voluptatibus totam laborum nesciunt nemo! Ullam iusto suscipit illo nihil aut, fugit dolorem voluptate ad quae excepturi reprehenderit ratione sint dicta consequatur quia temporibus. Fuga omnis, consequatur nemo deserunt ex quam! Maxime recusandae laborum mollitia placeat itaque impedit eos. Unde, eum facilis iusto aperiam totam non.</p>
      <div class="grid grid-rows-2 gap-5 lg:flex lg:gap-10 pt-10 ">
        <div class="faq-box w-100 lg:w-1/2 order-2 lg:order-1">
          <ul class="list-style-none shadow p-2 rounded-xl">
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Why should I have my home checked?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down service-green cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5">
                  <p class="p-1 text-md normal-case ">
                    When you are away on travel, business, vacation your insuranace company <strong>requires</strong> a home visit usually within 72 hours.  If something were to happen, your insurance claim could be void.
                  </p>
                </div>
              </div>
            </li>
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Who is entering my house?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down service-green cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    One of our friendly certified HomeSitter employees will come and check up on your home. All employees have a current clean criminal record check.
                  </p>
                </div>
              </div>
            </li>            
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Who is entering my house?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down service-green cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    One of our friendly certified HomeSitter employees will come and check up on your home. All employees have a current clean criminal record check.
                  </p>
                </div>
              </div>
            </li>            
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Who is entering my house?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down service-green cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    One of our friendly certified HomeSitter employees will come and check up on your home. All employees have a current clean criminal record check.
                  </p>
                </div>
              </div>
            </li>            
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Who is entering my house?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down service-green cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    One of our friendly certified HomeSitter employees will come and check up on your home. All employees have a current clean criminal record check.
                  </p>
                </div>
              </div>
            </li>            
            <li class="uppercase w-100 px-4">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Whats your process?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down service-green cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    Our HomeSitter employee will first meet with you so you can show us where everything is. Within 48 hours of you leaving your property, we will do thorough inspection with Video &amp; Photo documentation available on your user dashboard.
                  </p>
                </div>
              </div>
            </li>            
          </ul>
        </div>
        <div class="faq-img lg:w-1/2 w-full h-full overflow-hidden rounded-xl shadow-md order-1 lg:order-2 relative">
          <h4 class="absolute h-100 w-100 top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 md:text-3xl text-white font-bold uppercase tracking-wide">
            <span class="block">Your questions</span>
            <span class="block">our answers</span>
          </h4>  
          <img src="{{ asset('img/components/faq.jpg') }}" class="w-full h-full" />
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="h-96 bg-gradient-to-b from-slate-800 via-sky-800 to-sky-800">
      <div class="md:container md:mx-auto pt-10">
        <div class="grid grid-rows-3 lg:grid-rows-none lg:grid-cols-3 w-100 mx-auto gap-10">
          <div class="w-auto">
            <h5 class="text-white text-xl tracking-wide uppercase font-semibold">HomeSitters4U.com</h5>
            <p class="pt-5 text-white">
              Your house is more than a house, its a home where we have cherished memories and watch growth.  HomeSitters is dedicated to making sure your home is in tip top shape.  Worrying about someone checking in on your home can be troublesome, we remove that headache for you to ensure you have a valid insuranace claim in case something were to happen.
            </p>
          </div>
          <div class="w-full flex justify-center">
            <div class="div">
              <h5 class="text-white text-xl tracking-wide uppercase font-semibold">sitemap</h5>
              <ul class="list-style-none uppercase text-white pt-5 font-2xl font-bold">
                <li><i class="fa-solid fa-house mr-2"></i>  HOME</li>
                <li><i class="fa-solid fa-handshake mr-2"></i>  SERVICES</li>
                <li><i class="fa-solid fa-magnifying-glass mr-2"></i>  inspections</li>
                <li><i class="fa-solid fa-question mr-2"></i>  faq</li>
                <li><i class="fa-solid fa-envelope mr-2"></i>  contact</li>
              </ul>
            </div>
          </div>
          <div class="w-full">
            <h5 class="text-white text-xl tracking-wide uppercase font-semibold">contact</h5>
            <ul class="list-style-none uppercase text-white pt-5 font-2xl font-semibold">
              <li><i class="fa-solid fa-phone mr-2"></i>  1 (780) 289-3856</li>
              <li><i class="fa-solid fa-map mr-2"></i>  Edmonton, Alberta</li>
              <li><i class="fa-solid fa-envelope mr-2"></i> hello@homesitters4u.com</li>
            </ul>
            <h5 class="text-white text-xl tracking-wide uppercase font-semibold mt-5 pb-3">more info</h5>
            <form class="block w-full" id="connectForm" method="POST">
              @csrf
              <input type="email" name="email" id="email" required placeholder="youremail@address.com" class="w-2/3 rounded-md bg-slate-700/80 p-2 placeholder:font-white/500 placeholder:font-semibold placeholder:px-2">
              <button id="connectSubmit" type="submit" class="uppercase px-3 py-2 bg-orange-700 rounded-md text-white font-semibold">connect</button>
            </form>
            <div class="hidden w-100 text-center" id="toastMsg">
              <h4 class="text-white font-semibold">Thank you! your request for more information has been received.</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>  
  {{-- Laravel Mix --}}
  <script src="{{ mix('/js/app.js') }}"></script>
  {{-- Custom script --}}
  <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>