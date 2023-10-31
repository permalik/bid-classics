<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';

defineProps({
    vehicles: Array,
})
</script>

<template>
    <Head title="Dashboard"/>
    <AuthenticatedLayout>
        <div class="wrapper">
            <section>
                <h1>
                    Your Garage
                </h1>
                <ul>
                    <li v-for="vehicle of vehicles" class="vehicle-item">
                    <span>
                        {{ vehicle.year.name }}
                    </span>
                        <span>
                        {{ vehicle.make.name }}
                    </span>
                        <span>
                        {{ vehicle.classic.name }}
                    </span>
                    </li>
                </ul>
            </section>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
.wrapper {
    display: flex;
    flex-flow: column nowrap;
    align-items: center;
}

section {
    width: 100%;
    max-width: 40rem;
    margin: 5rem 0;
    padding: 0 0.5rem;
}

h1 {
    margin: 0 0 1.5rem 0;

    font-size: 1.5rem;
    font-weight: 700;
}

ul > li:not(:last-child) {
    margin: 0 0 1rem 0;
}

.vehicle-item {
    padding: 0.25rem 0.5rem;

    display: flex;
    flex-flow: column nowrap;

    background-color: var(--primary-dark-800);
    border-radius: 5px;
}
</style>
