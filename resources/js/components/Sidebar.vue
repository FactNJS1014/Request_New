<template>
  <aside id="logo-sidebar"
    class="fixed top-0 left-0 h-screen bg-blue-500 overlay sm:shadow-none overlay-open:translate-x-0 drawer drawer-start max-w-64 sm:z-0 sm:flex sm:translate-x-0"
    role="dialog" tabindex="-1">
    <div class="text-white drawer-header">
      <div class="flex items-center gap-3 p-0">
        <span class="icon-[tabler--tag-filled] text-2xl"></span>
        <h3 class="text-2xl font-bold text-white drawer-title">QUOTATION</h3>
      </div>
    </div>
    <div class="flex flex-col justify-between h-full px-2 drawer-body">
      <ul class="menu p-0 text-xl space-y-[230px] font-semibold">
        <div class="p-4 space-y-4">
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
        </div>
        <div class="p-4">
          <li>
            <router-link to="/main-menu" class="flex items-center gap-2">
              <span class="icon-[tabler--logout-2] text-2xl"></span>
              Main Menu
            </router-link>
          </li>
        </div>
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
