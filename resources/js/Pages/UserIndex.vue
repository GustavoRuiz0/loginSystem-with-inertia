<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import DangerButton from '../Components/DangerButton.vue';
import ButtonLink from '@/Components/ButtonLink.vue';

export default{
    props:{
        users:Array,
        canCreateUsers: Boolean
    },
    components:{
    AuthenticatedLayout,
    Head,
    DangerButton,
    DangerButton,
    ButtonLink
}
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users 
                <ButtonLink v-if="canCreateUsers" class="ml-4" :href="route('user.create')">
                    Add Users
                </ButtonLink> 
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <ul>
                            <li v-for="(user, key) in users" :key="key">
                                {{ user.name }}

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

