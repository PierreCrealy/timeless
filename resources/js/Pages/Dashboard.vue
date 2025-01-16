<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FooterComponent from '@/Components/FooterComponent.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head } from '@inertiajs/vue3';

//Import images

import activityTimeless from '@images/dashboard/activiteHotel.png';
import beforeNine from '@images/dashboard/1900Century.png';
import moyenAge from '@images/dashboard/moyenAge.png';
import future from '@images/dashboard/future.png';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #title>TimeLess</template>
        <template #subtitle>Bienvenue à Timeless, l’hôtel-restaurant où passé, présent et futur se rencontrent.</template>
    </AuthenticatedLayout>

    <!-- About Section -->
    <section id="about" class="py-20 backgroundColor" >
        <div class="container mx-auto px-6 text-center">
            <h2 class="font-size-128px fontPrimaryTitle primaryColor">À PROPOS</h2>
            <p class="font-size-33px fontSegoeUIItalic text-white">Plongez dans une expérience unique où chaque moment vous transportera à travers trois temporalités, offrant une ambiance intemporelle, des saveurs d'hier et des innovations d'aujourd'hui.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 backgroundColor" >
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                        <img :src="moyenAge" alt="Gallery 1" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <div class="flex-1 flex items-center justify-center">
                                <h3 class="fontSegoeUIBold text-white font-size-33px">Moyen-Age</h3>
                            </div>
                            <div class="mt-auto mb-4">
                                <PrimaryButton>
                                    <template #texte>Découvrir</template>
                                </PrimaryButton>
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
                                <h3 class="fontSegoeUIBold text-white font-size-33px">Année 20</h3>
                            </div>
                            <div class="mt-auto mb-4">
                                <PrimaryButton>
                                    <template #texte>Découvrir</template>
                                </PrimaryButton>
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
                                <h3 class="fontSegoeUIBold text-white font-size-33px">Futur</h3>
                            </div>
                            <div class="mt-auto mb-4">
                                <PrimaryButton>
                                    <template #texte>Découvrir</template>
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="py-20 backgroundColor" >
        <div class="container mx-auto px-6 text-center">
            <div class="flex flex-wrap justify-center -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="font-size-96px font-bold fontPrimaryTitle primaryColor">+300</h3>
                    <p class="font-size-33px mt-5 text-white fontPrimaryTitle">couverts par jours</p>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="font-size-96px font-bold fontPrimaryTitle primaryColor">+500</h3>
                    <p class="font-size-33px mt-5 text-white fontPrimaryTitle">Clients par jours</p>
                </div>
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <h3 class="font-size-96px font-bold fontPrimaryTitle primaryColor">+200</h3>
                    <p class="font-size-33px mt-5 text-white fontPrimaryTitle">activités à découvrir</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="py-20 bg-cover bg-center h-[70vh] relative" :style="{ backgroundImage: `url(${activityTimeless})` }">
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="font-size-128px font-bold mb-4 fontPrimaryTitle primaryColor">NOS ACTIVITÉS</h2>
            <p class="font-size-33px text-white fontSegoeUIItalic mb-48">Voyagez à travers le temps grâce à nos activités uniques de notre hôtel. Téléportez-vous avec plaisir dans notre salle unique, équipée.</p>
            <PrimaryButton>
                <template #texte>Découvrir</template>
            </PrimaryButton>
        </div>
    </section>

    <!-- Footer Section -->
    <FooterComponent/>
</template>
