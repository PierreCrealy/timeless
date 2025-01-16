<script setup lang="ts">
import { ref, computed } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ProfileDropdown from '@/Components/ProfileDropdown.vue';

import imageTime from '@images/headerTimeless.webp';
import flecheBlanche from '@images/test2.svg';
import logo from '@images/logo.png';

import { useRedirectRoute } from '@/composables/useRedirectRoute';

const slots = defineSlots();

const href = computed(() => {
  return slots.href ? slots.href()[0].children : '#';
});
</script>

<template>
    <div class="min-h-screen bg-cover bg-center" :style="{ backgroundImage: `url(${imageTime})` }">
        <nav class="fixed w-full z-20 top-0 start-0">
            <div class="max-w-screen-xl mx-auto pt-4 flex items-center justify-between relative">
                <!-- Navigation Links (Gauche) -->
                <div class="flex space-x-8 rtl:space-x-reverse text-2xl">
                    <a :href="route('dashboard')" :active="route().current('dashboard')" class="mr-32 block text-gray-900 hover:bg-gray-100 py-2 px-3 rounded md:p-0 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                        Home
                    </a>
                    <a :href="route('about')" :active="route().current('about')" class="block text-gray-900 hover:bg-gray-100 py-2 px-3 rounded md:p-0 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                        A propos
                    </a>
                </div>

                <!-- Logo Centré -->
                <div class="absolute inset-x-0 top-0 flex justify-center pointer-events-none">
                    <a :href="route('dashboard')" :active="route().current('dashboard')" class="flex items-center bg-white rounded-b-lg shadow-md" style="width: 300px; padding: 10px;">
                        <div class="flex justify-center items-center">
                            <img :src="logo" class="ml-24 h-20" alt="Logo">
                        </div>
                    </a>
                </div>

                <!-- Navigation Links (Droite + Menu Utilisateur) -->
                <div class="flex items-center text-2xl">
                    <a :href="route('service')" :active="route().current('service')" class="block text-gray-900 hover:bg-gray-100 py-2 px-3 rounded md:p-0 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                        Services
                    </a>
                    <a :href="route('contactUs')" :active="route().current('contactUs')" class="ml-32 block text-gray-900 hover:bg-gray-100 py-2 px-3 rounded md:p-0 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                        Contact
                    </a>

                    <ProfileDropdown class="ml-10"/>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="relative flex items-center justify-center h-[90vh] overflow-hidden bg-cover bg-center">
            <div class="relative z-10 text-center text-white">
                <h1 class="font-size-128px fontPrimaryTitle primaryColor">
                    <slot name="title"></slot>
                </h1>
                <p class="mt-3 font-size-33px fontSegoeUIItalic">
                    <slot name="subtitle"></slot>
                </p>
                <div class="mt-10" v-if="route().current() === 'dashboard' && !$page.props.auth.user">
                    <PrimaryButton @click="useRedirectRoute('/register')" class="mr-10">
                        <template #texte>Inscription</template>
                    </PrimaryButton>
                    <PrimaryButton @click="useRedirectRoute('/login')">
                        <template #texte>Connexion</template>
                    </PrimaryButton>
                </div>
            </div>
            <a :href="href">
                <img :src="flecheBlanche" alt="flèche blanche" class="absolute bottom-0 mt-3 left-1/2 transform -translate-x-1/2">
            </a>
        </div>
    </div>
</template>
