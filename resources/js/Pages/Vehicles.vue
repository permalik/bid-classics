<script setup>
import {Link} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from '@inertiajs/vue3';
defineProps({
    vehicles: Array,
    id: Number,
    vehicle: Object,
    name: String,
    classic: String,
    make: Object,
})
</script>

<template>
    <Head title="Vehicles"/>
    <AuthenticatedLayout>
        <div class="wrapper">
            <section>
                <h1>
                    All Vehicles
                </h1>
                <ul>
                    <li v-for="vehicle of vehicles" class="vehicle-item">
                        <Link :href="'/vehicle/' + vehicle.id" class="vehicle-link">
                        <span class="vehicle-price">
                            ${{ vehicle.price }}
                        </span>
                            <div class="vehicle-name">
                            <span>
                                {{ vehicle.year.name }}
                            </span>
                                <span>
                                {{ vehicle.make.name }}
                            </span>
                                <span>
                                {{ vehicle.classic.name }}
                            </span>
                            </div>
                        </Link>
                    </li>
                </ul>
            </section>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
.wrapper {
    min-height: 100vh;

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

.vehicle-item:hover {
    scale: 1.01;
}

.vehicle-link {
    padding: 0.25rem 0.5rem;

    display: flex;
    flex-flow: column nowrap;

    background-color: var(--primary-dark-800);
    border-radius: 5px;
}

.vehicle-price {
    font-weight: 600;
    color: var(--tertiary-accent);
}

.vehicle-name {
    margin: 0.5rem 0 0 0;
}

.vehicle-name > span:not(:last-child) {
    margin: 0 0.25rem 0 0;
}
</style>
