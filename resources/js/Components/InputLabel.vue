<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label>
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>

<style scoped>
label {
    display: block;

    font-size: .8rem;
    font-weight: 600;
    color: var(--primary-light);
    opacity: .7;
}
</style>
