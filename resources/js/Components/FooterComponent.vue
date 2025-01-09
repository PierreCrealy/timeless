<script setup lang="ts">
import logo from '@images/logo.png';
import instagramLogo from '@images/footer/instagram-logo.png';
import facebookLogo from '@images/footer/facebook-logo.png';
import twitterLogo from '@images/footer/twitter-logo.png';

import NavLink from '@/Components/NavLink.vue';
</script>
<template>
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
                        <li>
                            <NavLink :href="route('dashboard')" :active="route().current('about')">
                                <span class="text-white hover:primaryColor">A Propos</span>
                            </NavLink>
                        </li>
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
                            <img :src="facebookLogo" alt="Facebook">
                        </a>
                        <a href="#" class="text-white hover:text-yellow-600 mx-2">
                            <img :src="instagramLogo" alt="Instagram">
                        </a>
                        <a href="#" class="text-white hover:text-yellow-600 mx-2">
                            <img :src="twitterLogo" alt="Twitter">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <hr class="mt-6">
        <p class="text-white mt-4 text-center">© 2025 Timeless. Tous droits réservés.</p>
    </div>
</footer>
</template>