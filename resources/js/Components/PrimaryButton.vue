<template>
    <button>
        <slot />
    </button>
</template>

<style scoped>
button {
    margin: 0 0 0 1rem;
    padding: 0.5rem 1rem;

    display: inline-flex;
    align-items: center;

    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.125rem;
    background-color: var(--secondary-accent);
    border-radius: 5px;

    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms;

}

button:hover {
    background-color: var(--secondary-accent-700);
}

button:focus {
    background-color: var(--secondary-accent-700);
    outline: 1px solid var(--primary-accent);
}

button:active {
    background-color: var(--secondary-accent-900);
}
</style>
