<script setup lang="ts">
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

import { useFormattedDate } from '@/composables/useFormatedDate';

defineProps<{
    mustVerifyEmail?: Boolean;
    status?: String;
}>();

const user = usePage().props.auth.user;

const form = useForm({
    lastname: user.lastname,
    firstname: user.firstname,
    email: user.email,
});


const passwordInput = ref<HTMLInputElement | null>(null);
const currentPasswordInput = ref<HTMLInputElement | null>(null);

const formPassword = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('password.update'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
        onError: () => {
            if (formPassword.errors.password) {
                formPassword.reset('password', 'password_confirmation');
                passwordInput.value?.focus();
            }
            if (formPassword.errors.current_password) {
                formPassword.reset('current_password');
                currentPasswordInput.value?.focus();
            }
        },
    });
};
</script>

<template>
    <section class="backgroundColor text-white flex items-center justify-center min-h-screen ">
        <div class="bg-gray-800 rounded-lg p-8 max-w-4xl w-full mx-auto space-y-8">
            <a :href="route('dashboard')">retour</a>

            <!-- Profile Picture Section -->
            <div class="flex items-center justify-between">
                
                <div class="flex items-center space-x-4">
                    <img class="w-16 h-16 rounded-full" src="https://via.placeholder.com/150" alt="Avatar">
                    
                </div>
                <button class="text-blue-500 hover:text-blue-700">Edit</button>
            </div>
    
            <!-- Personal Information Section -->
            <div class="space-y-4">
                <form
            @submit.prevent="form.patch(route('profile.update'))"
            class="mt-6 space-y-6"
        >
                <h3 class="text-xl font-semibold">Personal information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h4 class="text-lg font-semibold">Prénom</h4>
                        <input
                            id="firstname"
                            type="text"
                            class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded p-2"
                            v-model="form.firstname"
                            required
                            autofocus
                            autocomplete="firstname"
                        />
                        <div class="mt-2 text-sm text-red-600" v-if="form.errors.firstname">
                            {{ form.errors.firstname }}
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Nom</h4>
                        <input
                            id="lastname"
                            type="text"
                            class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded p-2"
                            v-model="form.lastname"
                            required
                            autofocus
                            autocomplete="lastname"
                        />
                        <div class="mt-2 text-sm text-red-600" v-if="form.errors.lastname">
                            {{ form.errors.lastname }}
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Adresse Email</h4>
                        <input
                            id="lastname"
                            type="text"
                            class="mt-1 block w-full bg-gray-700 text-white border border-gray-600 rounded p-2"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="lastname"
                        />
                        <div class="mt-2 text-sm text-red-600" v-if="form.errors.email">
                            {{ form.errors.email }}
                        </div>
                    </div>
                </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold"></h4>
                        <p></p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Crée le</h4>
                        <p>{{ useFormattedDate(user.created_at) }}</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Modifié le</h4>
                        <p>{{ useFormattedDate(user.updated_at) }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">
                    <template #texte>Sauvegarder le profil</template>
                </PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >
                        Sauvegardé.
                    </p>
                </Transition>
            </div>
            </form>
            </div>
    
            <!-- Account Settings Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold">Modification de mot de passe</h3>
                <form @submit.prevent="updatePassword" class="mt-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-lg font-semibold">Votre mot de passe actuel</h4>
                            <TextInput
                                id="current_password"
                                ref="passwordInput"
                                v-model="formPassword.current_password"
                                type="password"
                                class="mt-1 block w-full"
                                autocomplete="new-password"
                            />

                            <InputError :message="formPassword.errors.current_password" class="mt-2" />
                        </div>
                        <div></div>
                        <div>
                            <h4 class="text-lg font-semibold">Nouveau Mot de passe</h4>
                            <TextInput
                                id="password"
                                ref="passwordInput"
                                v-model="formPassword.password"
                                type="password"
                                class="mt-1 block w-full"
                                autocomplete="new-password"
                            />

                            <InputError :message="formPassword.errors.password" class="mt-2" />
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Confirmation du mot de passe</h4>
                            <TextInput
                                id="password_confirmation"
                                v-model="formPassword.password_confirmation"
                                type="password"
                                class="mt-1 block w-full"
                                autocomplete="new-password"
                            />

                            <InputError
                                :message="formPassword.errors.password_confirmation"
                                class="mt-2"
                            />
                        </div>
                    </div>
                    <PrimaryButton :disabled="form.processing">
                        <template #texte>Modifier le mot de passe</template>
                    </PrimaryButton>
                </form>
            </div>
        </div>
    </section>
</template>
