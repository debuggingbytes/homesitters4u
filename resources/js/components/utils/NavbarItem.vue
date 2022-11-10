<template>
  <div>
    <li>
      <a :href="link" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-md uppercase">{{value}}</a>
    </li>
  </div>
</template>

<script>
  export default {
    props: ['link','value']
  }
</script>