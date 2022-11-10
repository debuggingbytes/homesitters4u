<template>
  <div>
    <nav
        class="px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 ">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="https://albertacraneservice.com/" class="flex items-center">
            BRAND NAME
          </a>
          
          <div class="hidden justify-between items-center w-1/2 md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
              class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent items-center">
              <NavbarItem link="#" value="Home"/>
              <NavbarItem link="#" value="Inspections"/>
              <NavbarItem link="#" value="About Us"/>
              <NavbarItem link="#" value="Contact Us"/>
              <!-- <NavbarItem link="#" value="Client Login"/> -->
            </ul>
          </div>
        </div>
      </nav>
  </div>
</template>

<script>
  import NavbarItem from './utils/NavbarItem.vue';
  export default {
    props: ['link', 'value'],
    components: {
      NavbarItem,
    }
  }
</script>