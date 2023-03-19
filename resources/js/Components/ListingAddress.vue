<template>
<span>
    {{ listing.street }} ,{{ listing.street_no }}
</span>
</template>

<script setup>
defineProps({
    listing: Object
})
</script>
