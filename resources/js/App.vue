// src/App.vue
<template>
  <div class="flex">
    <Sidebar />
    <section class="flex flex-col ms-[240px] w-full">
      <div class="flex justify-start p-6 bg-gray-300 md:justify-end">
        <h1 class="text-2xl">Welcome to Quotation</h1>
      </div>
      <div class="p-6">
        <router-view></router-view>
      </div>
    </section>
  </div>
</template>

<script>
import Sidebar from '@/components/Sidebar.vue';


export default {
  components: {
    Sidebar
  }
};
</script>


