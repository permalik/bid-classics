<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/vue3';
</script>

<template>
    <section class="guest-section">
        <div>
            <Link href="/">
                <ApplicationLogo/>
            </Link>
        </div>
        <div class=".form-container">
            <slot/>
        </div>
    </section>
</template>

<style scoped>
.guest-section {
    min-height: 100vh;

    display: flex;
    flex-flow: column nowrap;
    align-items: center;
    justify-content: center;
}

.form-container {
    width: 100%;
    padding: 0 1.5rem;

    overflow: hidden;
}

@media (min-width: 640px) {
    .form-container {
        max-width: 28rem;
    }
}
</style>
