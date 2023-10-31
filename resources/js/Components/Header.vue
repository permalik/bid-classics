<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav>
        <Link href="/" class="link">
            <span class="title-container">
                <img src="/images/logo.svg" alt="Steering wheel logo">
                <span class="title">Bid Classics</span>
            </span>
        </Link>
    </nav>
</template>

<style scoped>
nav {
    padding: .5rem 1rem;
}

.link {
    display: block;
}

.title-container {
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
}

img {
    width: 2rem;
    height: 2rem;
    margin: 0 .25rem 0 0;
}

.title {
    font-family: 'Lobster', sans-serif;
    font-size: 1.25rem;
}
</style>
