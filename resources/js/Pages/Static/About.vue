<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FooterComponent from '@/Components/FooterComponent.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head } from '@inertiajs/vue3';

//import image
import hotelTimeless from '@images/about/hotelTimeless.jpeg';
import CTATimeless from '@images/about/CTATimeless.png';
import beforeNine from '@images/dashboard/1900Century.png';
import aboutWaiter from '@images/about/aboutWaiter.jpg';
import immersion from '@images/about/immersion.png';
</script>
<template>
    <Head title="About" />
    <AuthenticatedLayout>
        <template #title>À Propos</template>
        <template #subtitle>Découvrez l'histoire et les valeurs qui font de Timeless un lieu unique de détente et de gastronomie.</template>
    </AuthenticatedLayout>


    <section class="py-16 px-4 backgroundColor h-[90vh]">
        <div class="flex flex-col md:flex-row items-center justify-center p-4 md:p-10">
        <div class="w-full md:w-1/2 p-4 md:p-10 text-white">
            <h1 class="font-size-40px font-bold fontPrimaryTitle primaryColor">QUI SOMMES NOUS ?</h1>
            <h2 class="font-size-40px fontSegoeUI mb-6">Plongez dans l'univers de TimeLess</h2>
            <p class="mb-6 descriptionTextColor font-size-15px">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget diam sodales nibh egestas feugiat sit amet nisl.
                Vestibulum eu metus sed nisi ullamcorper rhoncus. Quisque auctor scelerisque purus. Vivamus ullamcorper ante lacus,
                suscipit euismod mauris pharetra lacinia diam. In egestas nisi fermentum nec, interdum nunc luctus una.
            </p>
            <div class="flex flex-col items-center space-y-4 w-full">
                <div class="w-full p-6 bg-white text-gray-900 rounded-lg  text-center">
                    <p class="font-size-74px font-bold primaryColor mb-2 fontPrimaryTitle">400</p>
                    <p class="font-size-24px fontSegoeUI">clients par jours</p>
                </div>

                <div class="flex gap-4 w-full">
                    <div class="flex-1 p-4 bg-white text-gray-900 rounded-lg shadow text-center">
                        <p class="font-size-40px font-bold primaryColor mb-2">+200</p>
                        <p class="font-size-24px fontSegoeUI">clients par jours</p>
                    </div>
                    <div class="flex-1 p-4 bg-white text-gray-900 rounded-lg shadow text-center">
                        <p class="font-size-40px font-bold primaryColor mb-2">+200</p>
                        <p class="font-size-24px fontSegoeUI">clients par jours</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4 md:p-10">
            <img :src="hotelTimeless" alt="TimeLess Restaurant" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>
    </section>

    <!-- Section Nos Valeurs -->
<section class="backgroundColor py-16 px-4 relative">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center font-size-40px font-bold fontPrimaryTitle primaryColor">Nos Valeurs</h2>
        <p class="text-center text-white mb-12 font-size-40px fontSegoeUI">Les Piliers de Notre Univers Intemporel</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="text-center borderPrimaryColor border border-gray-700 rounded-lg p-8 bg-white card-back">
                <img :src="immersion" alt="Immersion" class="rounded-lg shadow-lg mb-4">
                <h3 class="font-size-40px fontPrimaryTitle primaryColor font-bold mb-2">Immersion</h3>
                <p class="text-gray-400 font-size-24px">Lorem ipsum calitatum proxime pallium.</p>
            </div>
            <!-- Card 2 -->
            <div class="text-center border border-yellow-400 rounded-lg p-8 backgroundPrimaryColor card-front">
                <img :src="aboutWaiter" alt="Élégance" class="rounded-lg shadow-lg mb-4">
                <h3 class="font-size-40px font-bold mb-2 text-black">Élégance</h3>
                <p class="text-white font-size-24px">Lorem ipsum calitatum proxime pallium.</p>
            </div>
            <!-- Card 3 -->
            <div class="text-center border borderPrimaryColor rounded-lg p-8 bg-white card-back">
                <img :src="beforeNine" alt="Immersion" class="rounded-lg shadow-lg mb-4 fixed-height">
                <h3 class="font-size-40px fontPrimaryTitle primaryColor font-bold mb-2">UNIQUE</h3>
                <p class="text-gray-400 font-size-24px">Lorem ipsum calitatum proxime pallium.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Section Réservation -->
    <section class="py-16 px-4 bg-gray-800 h-[40vh]" :style="{ backgroundImage: `url(${CTATimeless})`, backgroundRepeat: `no-repeat`, backgroundSize: `cover`, backgroundPosition: `center` } ">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="font-size-40px primaryColor fontPrimaryTitle">Voyagez à Travers le Temps avec Nous !</h2>
            <p class="text-white fontSegoeUIBold mb-8">Offrez-vous une expérience inoubliable en plongeant dans l'histoire et la culture des époques passées. 
                Notre restaurant-hôtel vous invite à découvrir une cuisine d’exception, des ambiances immersives et un service d'une élégance intemporelle</p>
            <PrimaryButton>
                <template #texte>
                    Réservez maintenant
                </template>
            </PrimaryButton>
        </div>
    </section>

    <!-- Footer Section -->
    <FooterComponent/>
</template>