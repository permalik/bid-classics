<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    sales: Array,
    years: Array,
    makes: Array,
    classics: Array,
    askingPrices: Array,
    asking_price: Number,
    vehicle: Number,
    classic: String,
    name: String,
    year_id: Number,
    sale: Object,
    id: Number,
    make: Object,
})
</script>

<template>
    <ul>
        <li v-for="sale of sales">
        <Link :href="'/sale/' + sale.id">
            <span>
                {{ sale.vehicle.year.name }}
            </span>
            <br/>
            <span>
                {{ sale.vehicle.make.name }}
            </span>
            <br/>
            <span>
                {{ sale.vehicle.classic.name }}
            </span>
            <br/>
            <span>
                {{ sale.asking_price }}
            </span>
        </Link>
        </li>
<!--        <li>-->
<!--            <a href="/vehicle/{{ id }}">-->
<!--                <span v-for="year of years">-->
<!--                    {{ year }}-->
<!--                </span>-->
<!--                <span v-for="make of makes">-->
<!--                    {{ make }}-->
<!--                </span>-->
<!--                <span v-for="classic of classics">-->
<!--                    {{ classic }}-->
<!--                </span>-->
<!--                <span v-for="askingPrice of askingPrices">-->
<!--                    {{ askingPrice }}-->
<!--                </span>-->
<!--            </a>-->
<!--        </li>-->
    </ul>
</template>
