<template>
  <div>Index</div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps({
    message: String
})
</script>

<script>
export default{
    layout: MainLayout
}</script>

