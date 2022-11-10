<template>
  <div class="w-100">
    <header>
      <NavBar />
      <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover hero-bg vh-75">
        <div
          class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed  transition transform duration-300 ease-in-out hover:backdrop-blur-sm hover:scale-1"
          style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="flex justify-center items-center h-full container md:w-100 mx-auto">
            <div class="text-white w-3/4">
              <h1 class="mb-10">
                <span class="block text-5xl text-white font-bold uppercase roboto drop-shadow-md tracking-widest">Providing</span>
                <span class="block text-5xl text-white font-bold uppercase roboto drop-shadow-md tracking-widest">Home Inspections</span>
                <span class="block text-md text-white font-medium uppercase roboto drop-shadow-md tracking-widest">so you don't need to worry while you're away</span>
              </h1>
              <button class=" bg-sky-600 px-4 py-2 uppercase text-md font-medium text-white rounded-lg shadow-md">Find Out How</button>
            </div>
            
          </div>
        </div>
      </div>   
    </header>
    <main class="bg-sky-50">
      <section id="services" class="py-16 -mt-10 md:container md:mx-auto">
        <h2 class="uppercase text-3xl text-cyan-900 font-bold tracking-widest">Our Services</h2>
      </section>
    </main>
  </div>
</template>

<script>
  import NavBar from './NavBar.vue'
  export default {
    components: {
      NavBar,
    }
  
  }
</script>
