<template>
    <aside class="fixed top-0 left-0 h-screen bg-blue-500 max-w-64">
      <div class="p-4 text-white">
        <div class="flex items-center gap-3">
          <span class="icon-[tabler--tag-filled] text-2xl"></span>
          <h3 class="text-2xl font-bold">QUOTATION</h3>
        </div>
      </div>
      <div class="flex flex-col justify-between h-full px-2">
        <ul class="p-0 space-y-4 text-xl font-semibold menu">
          <li>
            <router-link to="/" class="flex items-center gap-2">
              <span class="icon-[tabler--book-filled] text-2xl"></span>
              Request
            </router-link>
          </li>
          <li>
            <router-link to="/myrequest" class="flex items-center gap-2">
              <span class="icon-[tabler--bookmarks-filled] text-2xl"></span>
              My Request
            </router-link>
          </li>
          <li>
            <router-link to="/job-completed" class="flex items-center gap-2">
              <span class="icon-[tabler--clipboard-check-filled] text-2xl"></span>
              Job Completed
            </router-link>
          </li>
          <li>
            <router-link to="/job-canceled" class="flex items-center gap-2">
              <span class="icon-[tabler--clipboard-x-filled] text-2xl"></span>
              Job Canceled
            </router-link>
          </li>
          <li>
            <router-link to="/manual" class="flex items-center gap-2">
              <span class="icon-[tabler--clipboard-text-filled] text-2xl"></span>
              Manual
            </router-link>
          </li>
          <li>
            <router-link to="/main-menu" class="flex items-center gap-2">
              <span class="icon-[tabler--logout-2] text-2xl"></span>
              Main Menu
            </router-link>
          </li>
        </ul>
      </div>
    </aside>
  </template>
  
  <script>
  export default {
    name: "Sidebar"
  };
  </script>
  
  <style scoped>
  .menu li {
    padding: 10px;
  }
  </style>