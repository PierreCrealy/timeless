<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FooterComponent from '@/Components/FooterComponent.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
    <Head title="Contact us" />
    <AuthenticatedLayout>
        <template #title>Contactez-nous</template>
        <template #subtitle>Pour réservations, questions ou informations supplémentaires</template>
    </AuthenticatedLayout>
    <section class="bg-black text-white flex flex-col items-center justify-center p-4">
        <div class="max-w-4xl w-full">
            <h1 class="text-center font-size-40px mt-5 font-bold mb-4 primaryColor fontPrimaryTitle">NOS INFORMATIONS</h1>
            <div class="flex justify-between mb-4 mt-10">
                <div class="w-1/3 text-center ">
                    <p class="font-size-40px primaryColor fontPrimaryTitle">TÉLÉPHONE</p>
                    <p>123-456-789</p>
                </div>
                <div class="w-1/3 text-center">
                    <p class="font-size-40px primaryColor fontPrimaryTitle">ADRESSE</p>
                    <p>12 rue du campus du roc <br> 85000 <br> La Roche sur Yon</p>
                </div>
                <div class="w-1/3 text-center">
                    <p class="font-size-40px primaryColor fontPrimaryTitle">EMAIL</p>
                    <p>adresse@lycee-ndcuroc.com</p>
                </div>
            </div>
            <p class="text-center mb-4 mt-10 font-size-40px fontSegoeUIItalic">Si vous avez la moindre questions, <br> Merci de nous envoyer un message via le formulaire</p>
            <form class="space-y-4">
                <input type="text" placeholder="Votre nom" class="w-full p-2 bg-gray-800 border border-gray-600 rounded">
                <input type="email" placeholder="Votre Email" class="w-full p-2 bg-gray-800 border border-gray-600 rounded">
                <input type="text" placeholder="Sujet de l'email" class="w-full p-2 bg-gray-800 border border-gray-600 rounded">
                <textarea style="resize: none;" placeholder="Corps du message" class="w-full p-2 bg-gray-800 border border-gray-600 rounded h-24"></textarea>
                <button type="submit" class="w-full p-2 bg-yellow-500 text-black font-bold rounded">ENVOYER</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <FooterComponent/>
</template>