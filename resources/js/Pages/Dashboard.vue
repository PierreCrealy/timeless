<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import logo from '../../image/logo.png';
import activitéTimeless from '../../image/ActiviteHotel.jpeg';
import beforeNine from '../../image/année1920.png';
import moyenAge from '../../image/MoyenAge.png';
import future from '../../image/future.png';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout/>

    <!-- About Section -->
    <section id="about" class="py-20" style="background-color: var(--background-color);">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4" style="color: var(--primary-color)">À PROPOS</h2>
            <p class="text-xl text-white">Plongez dans une expérience unique où chaque moment vous transportera à travers trois temporalités, offrant une ambiance intemporelle, des saveurs d'hier et des innovations d'aujourd'hui.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20" style="background-color: var(--background-color);">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="relative">
                        <img :src="moyenAge" alt="Gallery 1" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h3 class="text-2xl font-bold text-white">Moyen Age</h3>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="relative">
                        <img :src="beforeNine" alt="Gallery 2" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h3 class="text-2xl font-bold text-white">Année 1920</h3>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="relative">
                        <img :src="future" alt="Gallery 3" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h3 class="text-2xl font-bold text-white">FUTURISTIC</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="py-20" style="background-color: var(--background-color);">
        <div class="container mx-auto px-6 text-center">
            <div class="flex flex-wrap justify-center -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-4xl font-bold" style="color: var(--primary-color)">+300</h3>
                    <p class="text-xl text-white">Frames sur les murs</p>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-4xl font-bold" style="color: var(--primary-color)">+500</h3>
                    <p class="text-xl text-white">Clients par jours</p>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-4xl font-bold " style="color: var(--primary-color)">+200</h3>
                    <p class="text-xl text-white">Mètres d'éclairage</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="py-20 bg-cover bg-center" :style="{ backgroundImage: `url(${activitéTimeless})` }">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4" style="color: var(--primary-color)">NOS ACTIVITÉS</h2>
            <p class="text-xl text-black">Voyagez à travers le temps grâce à nos activités uniques de notre hôtel. Téléportez-vous avec plaisir dans notre salle unique, équipée.</p>
            <a href="#" class="mt-6 inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-600 rounded shadow ripple hover:shadow-lg hover:bg-yellow-700 focus:outline-none">Learn More</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="py-10" style="background-color: var(--background-color);">
        <div class="container mx-auto px-6 text-center">
            <div class="flex flex-wrap justify-center -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <img :src="logo" alt="Logo" class="w-24 h-24 mx-auto mb-4">
                    <p class="text-white">© 2023 Timeless. Tous droits réservés.</p>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-xl font-bold text-white mb-4">About Us</h3>
                    <ul>
                        <li><a href="#" class="text-white hover:text-yellow-600">Our Story</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Meet the Team</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Careers</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-xl font-bold text-white mb-4">Contact Us</h3>
                    <ul>
                        <li><a href="#" class="text-white hover:text-yellow-600">Email</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Phone</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Address</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-6">
                <a href="#" class="text-white hover:text-yellow-600 mx-2">Facebook</a>
                <a href="#" class="text-white hover:text-yellow-600 mx-2">Twitter</a>
                <a href="#" class="text-white hover:text-yellow-600 mx-2">Instagram</a>
            </div>
        </div>
    </footer>
</template>
