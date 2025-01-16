<template>
    <div v-if="$page.props.auth.user" class="relative">
      <img
        id="avatarButton"
        class="w-10 h-10 rounded-full cursor-pointer"
        :src="'/avatars/' + $page.props.auth.user.avatar"
        alt="User dropdown"
        @click="toggleDropdown"
      />
      <!-- Dropdown menu -->
      <div
        v-if="isDropdownVisible"
        id="userDropdown"
        class="absolute right-0 z-10 divide-y divide-gray-100 rounded-lg shadow w-52 bg-white dark:bg-gray-800 dark:divide-gray-600"
      >
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
          <div>{{ $page.props.auth.user.firstname }} {{ $page.props.auth.user.lastname }}</div>
          <div class="font-medium truncate">{{ $page.props.auth.user.email }}</div>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
          <li>
            <a :href="route('profile.edit')" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
          </li>
        </ul>
        <div class="py-1">
          <form method="POST" :action="route('logout')">
            <input type="hidden" name="_token" :value="csrfToken" />
            <button type="submit" class="block px-4 py-2 w-full text-sm text-gray-700 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
              Déconnexion
            </button>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  
  export default {
    setup() {
      const isDropdownVisible = ref(false);
  
      const toggleDropdown = () => {
        isDropdownVisible.value = !isDropdownVisible.value;
      };

      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
  
      return {
        isDropdownVisible,
        toggleDropdown,
        csrfToken
      };
    },
  };
  </script>
  