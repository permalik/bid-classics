<script setup>
import {Link} from '@inertiajs/vue3';

defineProps({
    href: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Link
        :href="href"
        class="link block w-full px-4 py-2 text-left text-sm leading-5 transition duration-150 ease-in-out"
    >
        <slot/>
    </Link>
</template>
<style scoped>
.link {
    color: var(--primary-accent);
}

.link:hover {
    background-color: var(--primary-dark-700);
}

.link:focus {
    background-color: var(--primary-dark-700);
}
</style>
