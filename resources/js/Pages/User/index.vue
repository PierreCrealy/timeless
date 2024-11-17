<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm} from '@inertiajs/vue3';
import DangerButton from "@/Components/DangerButton.vue";

defineProps({
    users: {
        type: Object,
    },
})

const form = useForm({});

const deleteUser = (id: bigint) => {
    if (confirm("Are you sure you want to move this to trash")) {
        form.delete( route("user.delete", { id: id }), {
            preserveScroll: true,
        });
    }
};

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Users
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        All users
                    </div>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table>
                            <tbody>
                                <tr v-for="user in users" >
                                    <td>{{ user.name }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.created_at }}</td>
                                    <DangerButton
                                        class="ml-2 py-3 rounded my-auto text-white bg-red-500"
                                        @click="deleteUser(user.id)"
                                    >
                                        Delete
                                    </DangerButton>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
