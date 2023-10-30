<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-amber-300 text-left text-base font-medium text-amber-300 bg-neutral-800 focus:outline-none focus:text-amber-400 focus:bg-neutral-700 focus:border-amber-500 transition duration-150 ease-in-out'
        : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-neutral-500 hover:text-amber-500 hover:bg-neutral-700 hover:border-neutral-600 focus:outline-none focus:text-neutral-700 focus:bg-neutral-700 focus:border-neutral-700 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
