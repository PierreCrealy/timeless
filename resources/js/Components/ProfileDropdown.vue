<template>
    <div v-if="$page.props.auth.user">
        <button
            type="button"
            class="flex ml-10 text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            @click="toggleDropdown"
        >
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
        </button>

        <!-- Dropdown menu -->
        <div
            v-if="isDropdownOpen"
            class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
            id="user-dropdown"
        >
            <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white">{{ $page.props.auth.user.firstname }} {{ $page.props.auth.user.lastname }}</span>
                <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ $page.props.auth.user.email }}</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                    <DropdownLink :href="route('profile.edit')">Profile</DropdownLink>
                </li>
                <li>
                    <form method="POST" :action="route('logout')">
                    <input type="hidden" name="_token" :value="csrfToken">
                    <button type="submit">
                        Déconnexion
                    </button>
                </form>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import DropdownLink from '@/Components/DropdownLink.vue'; // Assurez-vous que ce composant existe

const isDropdownOpen = ref(false);
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const toggleDropdown = () => {
    isDropdownOpen.value = !isDropdownOpen.value;
};


</script>