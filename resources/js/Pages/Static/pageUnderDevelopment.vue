<template>
    <section class="backgroundColor h-screen flex flex-col justify-center items-center text-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl primaryColor">En cours de développement</h1>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Cette page est actuellement en cours de développement et sera disponible lors de la prochaine version. Merci de votre patience.</p>
                <PrimaryButton @click="useRedirectRoute('/welcome')">
                        <template #texte>Retour à l'accueil</template>
                    </PrimaryButton>
            </div>
        </div>
    </section>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

import { useRedirectRoute } from '@/composables/useRedirectRoute';
</script>
