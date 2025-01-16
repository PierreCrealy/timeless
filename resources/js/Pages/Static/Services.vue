<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FooterComponent from '@/Components/FooterComponent.vue';
import { Head } from '@inertiajs/vue3';

import ambianceEpoque from '@images/services/ambianceEpoque.jpeg';
import restaurantGastro from '@images/services/restaurantGastro.jpeg';
import serviceActivite from '@images/services/serviceactivite.jpeg';
import CTATimeless from '@images/about/CTATimeless.png';
import PrimaryButton from '@/Components/PrimaryButton.vue';

import { useRedirectRoute } from '@/composables/useRedirectRoute';
</script>
<template>
    <Head title="Services" />

    <AuthenticatedLayout>
        <template #title>SERVICES</template>
        <template #subtitle>Découvrez tous nos services qui composent notre section hôtellerie et restauration !</template>
        <template #href>#secteurActivite</template>
    </AuthenticatedLayout>

    <section id="secteurActivite" class="grid grid-cols-1 md:grid-cols-2 gap-8 backgroundColor">
        <!-- Section 1 -->
        <div class="md:col-span-2 flex flex-col md:flex-row items-center md:items-start md:items-center">
            <div class="md:w-1/2 mb-4 md:mb-0 md:mr-8">
                <img :src="serviceActivite" alt="Ambiances d'époque" class="w-full h-64 md:h-auto object-cover rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 p-4 text-center md:text-left">
                <h1 class="font-size-40px font-bold primaryColor mb-4">AMBIANCES D'ÉPOQUE</h1>
                <p class="font-size-24px mb-8 greyColor">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="flex justify-center md:justify-start">
                    <PrimaryButton @click="useRedirectRoute('/pageUnderDevelopment')">
                        <template #texte>En savoir plus</template>
                    </PrimaryButton>
                </div>
            </div>
        </div>
        
        <!-- Section 2 -->
        <div class="md:col-span-2 flex flex-col md:flex-row items-center md:items-start md:items-center">
            <div class="md:w-1/2 p-4">
                <h2 class="font-size-40px font-extrabold text-yellow-500 mb-2">ACTIVITÉS</h2>
                <p class="font-size-24px mb-4 greyColor">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                <PrimaryButton @click="useRedirectRoute('/pageUnderDevelopment')">
                        <template #texte>En savoir plus</template>
                    </PrimaryButton>
            </div>
            <div class="md:w-1/2 mb-4 md:mb-0 md:ml-8">
                <img :src="ambianceEpoque" alt="Activités" class="w-full h-64 md:h-auto object-cover rounded-lg shadow-lg">
            </div>
        </div>
        
        <!-- Section 3 -->
        <div class="md:col-span-2 flex flex-col md:flex-row items-center md:items-start md:items-center">
            <div class="md:w-1/2 mb-4 md:mb-0 md:mr-8">
                <img :src="restaurantGastro" alt="Restaurant gastronomique" class="w-full h-64 md:h-auto object-cover rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 p-4">
                <h2 class="font-size-40px font-extrabold text-yellow-500 mb-2">RESTAURANT GASTRONOMIQUE</h2>
                <p class="font-size-24px mb-4 greyColor">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                <PrimaryButton @click="useRedirectRoute('/pageUnderDevelopment')">
                        <template #texte>En savoir plus</template>
                </PrimaryButton>
            </div>
        </div>
    </section>

    <!-- Section Réservation -->
    <section class="py-16 px-4 bg-gray-800 h-[40vh]" :style="{ backgroundImage: `url(${CTATimeless})`, backgroundRepeat: `no-repeat`, backgroundSize: `cover`, backgroundPosition: `center` } ">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="font-size-40px primaryColor fontPrimaryTitle">Voyagez à Travers le Temps avec Nous !</h2>
            <p class="text-white fontSegoeUIBold mb-8">Offrez-vous une expérience inoubliable en plongeant dans l'histoire et la culture des époques passées. 
                Notre restaurant-hôtel vous invite à découvrir une cuisine d’exception, des ambiances immersives et un service d'une élégance intemporelle</p>
            <PrimaryButton @click="useRedirectRoute('/pageUnderDevelopment')">
                <template #texte>
                    Réservez maintenant
                </template>
            </PrimaryButton>
        </div>
    </section>

    <!-- Footer Section -->
    <FooterComponent/>
</template>