{{-- 
  
    Laravel ToDo List
      - Create components for reused code
      - Create User Database
      - Create Page Template(s)
      - Rewrite in VueJS
  
  
  --}}

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Check Ups & Inspections while you're away | HomeSitters4U.com</title>
  <meta property="og:url" content="https://www.homesitters4u.com"/>
  <meta property="og:title" content="Home Check Ups for Insurance"/>
  <meta property="og:description" content="Providing you with Home Check ups while you are away for insurance purposes.  Having documented visitations ensure your claim isn't void"/>
  <meta property="og:type" content="article"/>
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
  <div id="formModal" class="w-full h-full fixed top-0 bg-black/90 pointer-events-auto z-50 flex items-center justify-center transition-all duration-500 opacity-0 cursor-wait">
    
    <div class="text-black uppercase font-semibold w-1/4 bg-zinc-100/60 rounded-xl p-5 relative">
      <div class="absolute top-1 right-2">
        <i class="fa-solid fa-square-xmark text-red-500 cursor-pointer closeModal"></i>
      </div>
      <p class="text-center mb-5">Hey, We just want to make sure you're not a robot.</p>
      <div class="mx-auto w-1/2 block text-center p-3 bg-white rounded-full transition-all duration-500 ease">
        <input type="checkbox" name="robots" id="robotCheck" class="p-2">
        <span class="ml-5 hidden " id="notToday"><i class="fa-solid fa-check text-xl text-green-500"></i> Not Today!</span>
        <div class="loading inline-block mx-auto hidden">
          <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        </div>
      </div>
    </div>
  </div>
  
  <header id="home">
    <nav id="navbar"
        class="px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="https://albertacraneservice.com/" class="flex items-center z-10">
           <img src="{{ asset('img/components/logo.png') }}" class="w-24" />
          </a>
          <button id="mobileNavBtn" class="inline-block md:hidden px-2 py-1 z-10">
            <i class="fa-solid fa-bars text-white text-2xl"></i>
          </button>

          {{-- Mobile Navigation --}}
          <div id="mobileNav" class="md:hidden z-1 fixed top-0 left-0 w-full h-full bg-sky-800 transition-all duration-500 ease mobile-nav">
            <div class="relative w-full h-full">
              <ul class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/4 text-start font-bold text-white w-2/3 mx-auto">
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl mobileNav"><a href='#home'>Home</a><i class="fa-solid fa-house absolute right-0 top-2"></i></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl mobileNav"><a href="#services">Services</a><i class="fa-regular fa-handshake absolute right-0 top-2"></i></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl mobileNav"><a href="#inspections">Inspections</a><i class="fa-solid fa-magnifying-glass absolute right-0 top-2"></i></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl mobileNav"><i class="fa-solid fa-question absolute right-0 top-2"></i> <a href="#faq">Faq</a></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl mobileNav"><i class="fa-solid fa-comments absolute right-0 top-2"></i> <a href="#testimonials">Testimonials</a></li>
                <li class="relative uppercase py-2 mb-2 sm:text-xl md:text-3xl mobileNav"><i class="fa-regular fa-envelope absolute right-0 top-2"></i> <a href="#contact">contact</a></li>
              </ul>
            </div>
            
          </div>
          {{-- Desktop Navigation --}}
          <div class=" hidden justify-between items-center w-1/2 md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
              class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent items-center">
              <li>
                <a href="#home" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase nav-link">home</a>
              </li>
              <li>
                <a href="#services" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase nav-link">services</a>
              </li>
              <li>
                <a href="#inspections" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase nav-link">inspections</a>
              </li>
              <li>
                <a href="#faq" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase nav-link">faq</a>
              </li>
              <li>
                <a href="#testimonials" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase nav-link">Testimonials</a>
              </li>
              <li>
                <a href="#contact" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase nav-link">contact</a>
              </li>              
            </ul>
          </div>
        </div>
      </nav>
      <div id="hero" class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover hero-bg vh-50">
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
  <main class="relative">
    <div class="service-wave">&nbsp;</div>
    {{-- up arrow --}}
    <a class="fixed z-10 bottom-5 right-5 hidden" href='#home' id="scrollTop">
      <i class="fa-solid fa-circle-chevron-up font-white fa-fade text-2xl" style="--fa-animation-duration: 3s;"></i>
    </a>
    <section id="services" class="md:container md:mx-auto relative py-32">
      <div class="pt-20 mx-5 md:mx-0">
        <h2 class="text-cyan-600 text-3xl md:text-4xl font-bold uppercase tracking-wide pb-5">Our Services</h2>
        <p class="py-2 md:text-lg pb-5 font-medium">HomeSitters4U wants to make sure you never have to worry about insurance claims if something were to happen. We provide robust services to ensure that your home is kept in tip top shape while you are away.  These services can include things such as Snow &amp; Ice removal, Lawn maintenance, smoke detector function checks, sump pump working conditions. We can even feed your goldfish if that helps you! plus so much more. </p>
        {{-- Slide in tip --}}
        <div class="transition duration-400 ease
         block w-100 mx-5 md:w-1/2 md:mx-auto py-5 mt-5 bg-gradient-to-br from-blue-700/80 via-cyan-600/80 to-slate-600/80
         p-5  rounded-lg slide-x relative ring-2 ring-slate-600 drop-shadow-md drop-shadow-lg hover:bg-cyan-700/60 hover:ring-pink-500" id="tip">
          <div class="absolute top-5 right-5">
            <i id="closeTip" class="fa-solid fa-square-xmark cursor-pointer text-rose-700"></i>
          </div>
          <h5 class="text-md font-bold md:text-xl w-100 text-center uppercase text-white">Did you know?</h5>
          <p class="pt-2 text-base lg:text-md text-white font-medium">In order to minimize the risk, insurance companies often require a home to be checked in on every <strong>48-72 hours</strong>. The exact period of time varies by insurer, so be sure you know what your home insurance policy requires.  HomeSitters4u provides the ability to meet those requirements. Allowing you to have peace of mind while you're away.</p>
        </div>

        {{-- start cards --}}
        <div class="grid grid-rows-3  lg:grid-rows-none lg:grid-cols-3 gap-3 md:gap-5 mt-20 mx-auto lg:mx-0">
          <div class="transition-all ease duration-500 hover:-translate-y-2 hover:drop-shadow-lg
          bg-slate-700 rounded-xl min-h-48 w-auto drop-shadow-md bg-gradient-to-br from-gray-300 via-green-300 to-green-500 shadow card">
            <div class="px-10 py-5">
              <div class="flex justify-center align-center"> 
                <i class="fa-solid fa-house text-2xl lg:text-3xl"></i>
                <h3 class="pl-2 text-md md:pl-5 sm:text-xl md:text-xl uppercase font-bold inline-block align-bottom">Home Check Ups</h3>
              </div>
              <p class="pt-5 font-medium text-sm md:text-md">
                Looking for peace of mind while you are away?  Our homesitters will visit your house and provide documentation of the visit. This documentation can be provided to your insurance incase somethere where to happen.
              </p>
            </div>
            
          </div>
          
          <div class="transition-all ease duration-500 hover:-translate-y-2 hover:drop-shadow-lg 
          bg-slate-700 rounded-xl min-h-48 w-auto drop-shadow-md bg-gradient-to-br from-gray-300 via-green-300 to-green-500 shadow">
            <div class="px-10 py-5">
              <div class="flex justify-center align-center"> 
                <i class="fa-regular fa-snowflake text-2xl lg:text-3xl"></i>
                <h3 class="pl-2 text-md md:pl-5 sm:text-xl md:text-xl uppercase font-bold inline-block align-bottom">maintenance</h3>
              </div>
              <p class="pt-5 font-medium text-sm md:text-md">
                While you are away, we can provide you with addition services to suit your needs.  Our home check ups can include Lawn mowing, Snow removal and more.
              </p>
            </div>
            
          </div> 

          <div class="transition-all ease duration-500 hover:-translate-y-2 hover:drop-shadow-lg 
          bg-slate-700 rounded-xl min-h-48 w-auto drop-shadow-md bg-gradient-to-br from-gray-300 via-green-300 to-green-500 shadow">
            <div class="px-10 py-5">
              <div class="flex justify-center align-center"> 
                <i class="fa-solid fa-envelopes-bulk text-2xl lg:text-3xl"></i>
                <h3 class="pl-2 text-md md:pl-5 sm:text-xl md:text-xl uppercase font-bold inline-block align-bottom">extra services</h3>
              </div>
              <p class="pt-5 font-medium text-sm md:text-md">
                Homesitters doesn't just check on your home while you are away. We have addition services available for you to choose from.  Some examples of these are plant watering, light dusting and mail collection.
              </p>
            </div>
           
          </div> 
        </div>
        {{-- end cards --}}
      </div>
    </section>
    <section id="inspections" class="mt-32 py-32">
      <div class="inspect-frame container mx-auto my-20 relative slide-x rounded-xl overflow-hidden p-2 md:p-20 lg:py-20 lg:px-5">        
        <div class="lg:flex lg:justify-center lg:items-center w-full lg:min-h-full relative">
          <div class="hidden inspect-img lg:block lg:w-2/3">

            <div class="photocard bg-white p-2 drop-shadow-md shadow">
              <div class="photocard__photo">
                <img src="{{ asset('img/components/home-inspections-and-check-ups.png') }}" alt="Providing home check ups while youre away" class="triangle-gradient w-100 rounded-none">
              </div>
              <div class="photocard__foot">
                  <p>
                    Electrical panel checked
                    <span class="block">
                      08/12/21 - 1440 hrs
                    </span>
                  </p>
              </div>
            </div>

            <div class="photocard bg-white p-2 drop-shadow-md shadow">
              <div class="photocard__photo">
                <img src="{{ asset('img/components/home-inspections-and-check-ups.png') }}" alt="Providing home check ups while youre away" class="triangle-gradient w-100 rounded-none">
              </div>
              <div class="photocard__foot">
                  <p>
                    Electrical panel checked
                    <span class="block">
                      08/12/21 - 1440 hrs
                    </span>
                  </p>
              </div>
            </div>
            
            <div class="photocard bg-white p-2 drop-shadow-md shadow">
              <div class="photocard__photo">
                <img src="{{ asset('img/components/home-inspections-and-check-ups.png') }}" alt="Providing home check ups while youre away" class="triangle-gradient w-100 rounded-none">
              </div>
              <div class="photocard__foot">
                  <p>
                    Electrical panel checked
                    <span class="block">
                      08/12/21 - 1440 hrs
                    </span>
                  </p>
              </div>
            </div>


          </div>
          <div class="inspect-text w-100 lg:w-3/4 items-start text-center md:text-start ">
            <h3 class="text-xl md:text-2xl xl:text-3xl uppercase font-semibold pb-1 mb-4">
              Your Home Check Up<i class="text-red-600 fa-solid fa-heart-pulse ml-3 fa-beat"></i>
            </h3>
            <p class="text-sm md:text-lg pb-5">When it comes to your house, we understand that its more than that.  Your house is your home, we want to make sure it stays that way while you are away.  We will check all the boxes when it comes to visiting your home. Function checking your smoke detectors, sump pumps, furnance pilot light. We can even gather your mail! </p>
            <ul class="list-style-none text-black text-start">
              <li class="text-sm md:text-md lg:text-xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>hot water tank leaks</li>
              <li class="text-sm md:text-md lg:text-xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>breaker panel trips</li>
              <li class="text-sm md:text-md lg:text-xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>furnances</li>
              <li class="text-sm md:text-md lg:text-xl uppercase"><i class="fa-regular text-green-700 fa-circle-check md:pr-5 pb-1"></i>smoke detectors</li>
            </ul>
          </div>
        </div>
        <div class="absolute top-0 left-0 triangle-gradient w-full h-full pointer-events-none">
        </div>
      </div>
    </section>

    {{-- FAQS --}}
    <section id="faq" class="lg:container mx-5 lg:mx-auto lg:py-20 py-10">
      <h2 class="text-xl mb-5 md:mb-0 md:text-3xl tracking-wide uppercase text-cyan-600 font-bold">Frequently Asked Questions</h2>
      <p class="text-xl pt-5">
        Here are some of the frequently asked questions from our clients. Homesitters4u will updated our list of most commonly asked questions from our clients.  Don't see what you are looking for? Feel free to reach out!
      </p>
      <div class="grid grid-rows-2 gap-5 lg:flex lg:gap-10 pt-10 ">
        <div class="faq-box w-100 lg:w-1/2 order-2 lg:order-1">
          <ul class="list-style-none shadow p-2 rounded-xl lg:h-full">
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Why should I have my home checked?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down text-cyan-600 cursor-pointer"></i>
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
                <i class="pr-5 text-2xl fa-solid fa-chevron-down text-cyan-600 cursor-pointer"></i>
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
                <h4 class="uppercase text-md font-bold">Why use this service?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down text-cyan-600 cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    Most insurance companies require someone to check on your house every <strong>48-72 hrs!</strong> If something were to happen to your home while on vacation, your claim would be void and you would responsibile for all loses.
                  </p>
                </div>
              </div>
            </li>            
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">What is your process?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down text-cyan-600 cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    Our process is simple, Our HomeSitter employee will first meet with you so you can show us where everything is. Within 48 hours of your departure date, we will come to your residence and ensure everything is in order.  We write up documentation and provide photos. The report is then emailed to you, and available online!
                  </p>
                </div>
              </div>
            </li>            
            <li class="uppercase w-100 px-4 border-b-2 mb-1">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">Can't I just use a friend/family member?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down text-cyan-600 cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    Yes, of course you can!  Your friends and family are perfectly fine to visit your home, although they will usually not have any documentation stating their visits.
                  </p>
                </div>
              </div>
            </li>            
            <li class="uppercase w-100 px-4">
              <div class="flex justify-between">
                <h4 class="uppercase text-md font-bold">How do I know when you're coming?</h4>
                <i class="pr-5 text-2xl fa-solid fa-chevron-down text-cyan-600 cursor-pointer"></i>
              </div>              
              <div class="accordian accordian-collapse mt-2">
                <div class="bg-slate-200 rounded-xl w-100 p-2 mb-5 ">
                  <p class="p-1 text-md normal-case">
                    You will received an email 24 hours before visit, and then another email when our homesitter is going to enter and exit your home.
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
 
    <section id="testimonials" class="relative mt-64">      
      <div class="px-5 lg:container lg:mx-auto slide-x pt-8 pb-16 overflow-hidden">
        <h2 class="text-xl mb-5 md:mb-0 md:text-3xl uppercase text-white font-bold md:py-10 mx-auto w-fit">See what our clients say</h2>
        <div class="lg:mb-20 w-full">
          <div class="testimonials w-full">
            <button id="prev" class="hover:drop-shadow-md hover:font-bold hover:opacity-80 px-2 py-2 text-white font-semibold text-center">
              <i class="fa-sharp fa-solid fa-chevron-left text-2xl text-black"></i>
            </button>
            <button id="next" class="hover:drop-shadow-md hover:font-bold hover:opacity-80 px-2 py-2 text-white font-semibold text-center">
              <i class="fa-sharp fa-solid fa-chevron-right text-black text-2xl"></i>
            </button>
            <div class="w-full h-full">
             
              <x-Testimonial class='current' testimonialName="Joe D" 
              testimonialText="HomeSitters4U provides such an amazing service, they send all the pictures of each item inspected during the home check up, we also had our driveways shoveled while we were away. Would recommend!" 
              testimonialTitle='Amazing service!' testimonialImg='test.jpg'/>

              <x-Testimonial testimonialName="Shantell M" 
              testimonialText="I wasn't sure if I really needed this service. But after a lot of thinking I decided that for the price, it was worth it.  My homesitter was very friendly and professional. By the second day of my vacation I recieved my email saying my homesitter was visiting that day. After their check up I had my document which included photos. I was very impressed with this service." 
              testimonialTitle='You need this service!' testimonialImg='test2.jpg'/>

              <x-Testimonial testimonialName="Marianne C" 
              testimonialText="I honestly was surprised I could find someone to water my plants while on vacation with ease! Not only was my home checked on for my insurance, but my plants didnt die either! I had them visit twice during my vacation." 
            testimonialTitle='Superb!!' testimonialImg='test3.jpg'/>
              
              
            </div>            
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="contact">
    <div class="max-h-fit lg:h-96 bg-gradient-to-b from-slate-800 via-sky-800 to-sky-800">
      <div class="lg:container lg:mx-auto pt-10">
        <div class="grid grid-rows-3 md:grid-rows-none md:grid-cols-3 w-100 mx-auto gap-5 md:gap-0 lg:gap-10">
          <div class="w-auto px-5 lg:px-0 row-span-3 grid-span-3 md:row-auto">
            <h5 class="text-white text-xl tracking-wide uppercase font-semibold">HomeSitters4U.com</h5>
            <p class="pt-5 text-white">
              Your house is more than a house, its a home where we have cherished memories and watch growth.  HomeSitters is dedicated to making sure your home is in tip top shape.  Worrying about someone checking in on your home can be troublesome, we remove that headache for you to ensure you have a valid insuranace claim in case something were to happen.
            </p>
          </div>
          <div class="w-3/4 lg:flex lg:justify-center grid-span-3 md:row-auto">
            <div class="px-5 lg:px-0">
              <h5 class="text-white text-xl tracking-wide uppercase font-semibold">sitemap</h5>
              <ul class="list-style-none uppercase text-white pt-5 font-4xl font-bold sm:flex sm:gap-2 md:gap-0 md:flex-col lg:block">
                <li><i class="fa-solid fa-house mr-2 w-8 text-center"></i>  HOME</li>
                <li><i class="fa-solid fa-handshake mr-2 w-8 text-center"></i>  SERVICES</li>
                <li><i class="fa-solid fa-magnifying-glass mr-2 w-8 text-center"></i>  inspections</li>
                <li><i class="fa-solid fa-question mr-2 w-8 text-center"></i>  faq</li>
                <li><i class="fa-solid fa-envelope mr-2 w-8 text-center"></i>  contact</li>
              </ul>
            </div>
          </div>
          <div class="w-full px-5 lg:px-0 pb-10 lg:pb-0 grid-span-3 md:row-auto">
            <h5 class="text-white text-xl tracking-wide uppercase font-semibold">contact</h5>
            <ul class="list-style-none uppercase text-white pt-5 font-4xl font-semibold sm:flex sm:gap-2 md:gap-0 md:block">
              {{-- <li><i class="fa-solid fa-phone mr-2"></i>  1 (780) 289-3856</li> --}}
              <li><i class="fa-solid fa-map mr-2"></i>  Edmonton, Alberta</li>
              <li><i class="fa-solid fa-envelope mr-2"></i> hello@homesitters4u.com</li>
            </ul>
            <h5 class="text-white text-xl tracking-wide uppercase font-semibold mt-5 pb-3">more info</h5>
            <form class="block w-full" id="connectForm">
              
              <input type="email" name="email" id="email" required placeholder="youremail@address.com" class="lg:w-2/3 rounded-md bg-slate-700/80 p-2 placeholder:font-white/500 placeholder:font-semibold placeholder:px-2 w-auto block mb-3 text-white px-2 font-medium">
              <button id="connectSubmit" type="submit" class="uppercase px-3 py-2 bg-orange-700 rounded-md text-white font-semibold w-auto block mb-3 lg:w-auto">connect</button>
              @csrf
              @method("POST")
            </form>
            <div class="hidden w-100 text-center" id="toastMsg">
              <h4 class="text-white font-semibold">Thank you! your request for more information has been received.</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full flex flex-col align-center justify-center text-xs">
        <p class="text-white text-center">Copyright &copy; <span id='copyright'></span> HomeSitters4u.com</p>
        <p class="text-white text-center">Website created by <a href="https://www.debuggingbytes.com" class="text-orange-500 uppercase">DebuggingBytes</a></p>
      </div>
    </div>
    
  </footer>  
  {{-- Laravel Mix --}}
  <script src="{{ mix('/js/app.js') }}"></script>
  {{-- Custom script --}}
  <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>