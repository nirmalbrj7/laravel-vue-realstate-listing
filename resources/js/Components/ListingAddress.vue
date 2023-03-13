<template>
<span>
    {{ listing.street }} ,{{ listing.street_no }} for Price {{ listing.price }}
</span>
</template>

<script setup>
defineProps({
    listing: Object
})
</script>
