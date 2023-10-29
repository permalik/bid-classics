<script setup>
defineProps({
    years: Array,
    makes: Array,
    classics: Array,
    askingPrices: Array,
})
</script>

<template>
    <ul>
        <li v-for="year of years">
            {{ year }}
        </li>
        <li v-for="make of makes">
            {{ make }}
        </li>
        <li v-for="classic of classics">
            {{ classic }}
        </li>
        <li v-for="askingPrice of askingPrices">
            {{ askingPrice }}
        </li>
    </ul>
</template>
