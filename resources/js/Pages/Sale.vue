<script setup>
defineProps({
    sale: Object,
    askingPrice: Number,
})
</script>

<template>
<h1>
    This Vehicle
</h1>
    <div>
        {{ askingPrice }}
    </div>
</template>
