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
            <h2 class="text-8xl font-bold mb-4 primaryTitle" style="color: var(--primary-color)">À PROPOS</h2>
            <p class="text-xl italic text-white">Plongez dans une expérience unique où chaque moment vous transportera à travers trois temporalités, offrant une ambiance intemporelle, des saveurs d'hier et des innovations d'aujourd'hui.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20" style="background-color: var(--background-color);">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                        <img :src="moyenAge" alt="Gallery 1" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <div class="flex-1 flex items-center justify-center">
                                <h3 class="text-2xl font-bold text-white mb-2">Moyen Age</h3>
                            </div>
                            <div class="mt-auto mb-4">
                                <button class="px-4 py-2 text-white custom-button">
                                    <span>Découvrir</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                        <img :src="beforeNine" alt="Gallery 2" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <div class="flex-1 flex items-center justify-center">
                                <h3 class="text-2xl font-bold text-white">Année 80</h3>
                            </div>
                            <div class="mt-auto mb-4">
                                <button class="px-4 py-2 text-white custom-button">
                                    <span>Découvrir</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                        <img :src="future" alt="Gallery 3" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <div class="flex-1 flex items-center justify-center">
                                <h3 class="text-2xl font-bold text-white">Futur</h3>
                            </div>
                            <div class="mt-auto mb-4">
                                <button class="px-4 py-2 text-white custom-button">
                                    <span>Découvrir</span>
                                </button>
                            </div>
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
                    <h3 class="text-8xl font-bold primaryTitle" style="color: var(--primary-color)">+300</h3>
                    <p class="text-xl mt-5 text-white primaryTitle">couverts par jours</p>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-8xl font-bold primaryTitle" style="color: var(--primary-color)">+500</h3>
                    <p class="text-xl mt-5 text-white primaryTitle">Clients par jours</p>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-8xl font-bold primaryTitle" style="color: var(--primary-color)">+200</h3>
                    <p class="text-xl mt-5 text-white primaryTitle">activités à découvrir</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="py-20 bg-cover bg-center h-[50vh] relative" :style="{ backgroundImage: `url(${activitéTimeless})` }">
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-8xl font-bold mb-4 primaryTitle" style="color: var(--primary-color)">NOS ACTIVITÉS</h2>
            <p class="text-xl text-white">Voyagez à travers le temps grâce à nos activités uniques de notre hôtel. Téléportez-vous avec plaisir dans notre salle unique, équipée.</p>
            <button class="px-4 py-2 mt-8 text-white custom-button">
                                    <span>Découvrez moi</span>
                                </button>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="py-10" style="background-color: var(--background-color);">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap items-start justify-between">
            <!-- First Column: Logo -->
            <div class="w-full md:w-1/4 px-2 mb-4">
                <img :src="logo" alt="Logo" class="w-24 h-24 mx-auto mb-4">
            </div>
            
            <!-- Second, Third, and Fourth Columns: En savoir plus, Nous Contacter, and Réseaux Sociaux -->
            <div class="w-full md:w-3/4 flex flex-wrap justify-end -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-xl font-bold text-white mb-4">En savoir plus</h3>
                    <ul>
                        <li><a href="#" class="text-white hover:text-yellow-600">A Propos</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Moyen Age</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Année 80</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Future</a></li>
                        <li><a href="#" class="text-white hover:text-yellow-600">Nos activités</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-xl font-bold text-white mb-4">Nous Contacter</h3>
                    <ul>
                        <li><a href="tel:123-456-7890" class="text-white hover:text-yellow-600">Numéro Hôtel : 123-456-7890</a></li>
                        <li><a href="tel:123-456-785" class="text-white hover:text-yellow-600">Numéro Restaurant : 123-456-785</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="text-xl font-bold text-white mb-4">Réseaux Sociaux</h3>
                    <div class="flex justify-evenly mt-6">
                        <a href="#" class="text-white hover:text-yellow-600 mx-2">
                            <img src="../../image/facebook-logo.png" alt="Facebook">
                        </a>
                        <a href="#" class="text-white hover:text-yellow-600 mx-2">
                            <img src="../../image/instagram-logo.png" alt="Instagram">
                        </a>
                        <a href="#" class="text-white hover:text-yellow-600 mx-2">
                            <img src="../../image/twitter-logo.png" alt="Twitter">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <hr class="mt-6">
        <p class="text-white mt-4 text-center">© 2024 Timeless. Tous droits réservés.</p>
    </div>
</footer>
</template>
