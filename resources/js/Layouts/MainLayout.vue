<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
        <div class="container mx-auto">
            <nav class="p4 flex items-center justify-between">
                <div class="text-lg"><Link :href="route('listing.index')">Listings</Link></div>
                <div class="text-xl text-indigo-600 dark:text-indigo-200 font-bold text-center" > <Link :href="route('listing.index')">Vue Laravel</Link></div>
                <div>
                    <Link :href="route('listing.create')" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p2 rounded-md"> + New Listing </Link>
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div v-if="flashSuccess" class="mb-4 boarder rounded-md shadow-sm border-green-200 dark:border-green-900 bg-green-50 dark:bg-green-900 p-2">
        {{flashSuccess}}
    </div>
    <slot></slot>
    </main>

</template>

<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3'
const flashSuccess = computed(() => usePage().props.flash.success);
</script>

