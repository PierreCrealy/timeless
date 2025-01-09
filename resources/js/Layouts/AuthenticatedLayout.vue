<script setup lang="ts">
import { ref } from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
import imageTime from '../../image/headerTimeless.png';
import logo from '../../image/logo.png';
</script>

<template>
    <div>
        <div class="min-h-screen bg-cover bg-center" :style="{ backgroundImage: `url(${imageTime})` }">
            <nav class="shadow-lg">
                <!-- Primary Navigation Menu -->
                <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
                    <div class="flex h-20 justify-center items-center">
                        <div class="flex items-center justify-between w-full">
                            <!-- Left Navigation Links -->
                            <div class="hidden space-x-12 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    <span class="text-2xl text-white">Accueil</span>
                                </NavLink>
                                <NavLink :href="route('about')" :active="route().current('about')">
                                    <span class="text-2xl text-white">À propos</span>
                                </NavLink>
                            </div>

                            <!-- Logo -->
                            <div class="flex shrink-0 items-center justify-center ">
                                <Link :href="route('dashboard')">
                                    <div class="bg-white rounded-b-lg shadow-md" style="width: 200px; padding: 10px;">
                                        <img :src="logo" alt="Logo" class="h-12 w-auto mx-auto" />
                                    </div>
                                </Link>
                            </div>

                            <!-- Right Navigation Links -->
                            <div class="hidden space-x-12 sm:flex">
                                <NavLink :href="route('service')" :active="route().current('service')">
                                    <span class="text-2xl text-white">Services</span>
                                </NavLink>
                                <NavLink :href="route('contactUs')" :active="route().current('contactUs')">
                                    <span class="text-2xl text-white">Contactez-nous</span>
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:ms-6 sm:flex sm:items-center">
                            <!-- Settings Dropdown -->
                            <div class="relative ms-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center rounded-md border border-transparent bg-white px-4 py-2 text-sm font-medium leading-4 "
                                            >
                                                {{ $page.props.auth.user ? $page.props.auth.user.name : 'Connexion / Inscription'}}
                                                <svg
                                                    class="-me-0.5 ms-2 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>
                                    <template #content v-if="$page.props.auth.user">
                                        <DropdownLink :href="route('profile.edit')">Profile</DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">Déconnexion</DropdownLink>
                                    </template>
                                    <template #content v-else>
                                        <DropdownLink :href="route('login')" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Connexion</DropdownLink>
                                        <DropdownLink :href="route('register')" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Inscription</DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-900 dark:hover:text-gray-400 dark:focus:bg-gray-900 dark:focus:text-gray-400"
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="sm:hidden"
                >
                    <div class="space-y-1 pb-3 pt-2">
                        <ResponsiveNavLink
                            :href="route('dashboard')"
                            :active="route().current('dashboard')"
                        >
                        <span class="text-2xl text-white">Accueil</span>
                        </ResponsiveNavLink>
                        <ResponsiveNavLink
                            :href="route('about')"
                            :active="route().current('about')"
                        >
                        <span class="text-2xl text-white">À propos</span>
                        </ResponsiveNavLink>
                        <ResponsiveNavLink
                            :href="route('service')"
                            :active="route().current('service')"
                        >
                        <span class="text-2xl text-white">Services</span>
                        </ResponsiveNavLink>
                        <ResponsiveNavLink
                            :href="route('contactUs')"
                            :active="route().current('contactUs')"
                        >
                        <span class="text-2xl text-white">Contactez-nous</span>
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div
                        class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600"
                    >
                        <div class="px-4">
                            <div
                                class="text-base font-medium text-gray-800 dark:text-gray-200"
                            >
                                {{ $page.props.auth.user ? $page.props.auth.user.name : '' }}
                            </div>
                            <div class="text-sm font-medium text-gray-500">
                                {{ $page.props.auth.user ? $page.props.auth.user.email : '' }}
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink
                                :href="route('profile.edit')"
                                v-if="$page.props.auth.user"
                            >
                                Profile
                            </ResponsiveNavLink>

                            <ResponsiveNavLink
                                :href="route('logout')"
                                v-if="$page.props.auth.user"
                                method="post"
                                as="button"
                            >
                               Déconnexion
                            </ResponsiveNavLink>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
</template>
