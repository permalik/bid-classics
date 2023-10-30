<script setup>
defineProps({
    year: String,
    make: String,
    classic: String,
    mileage: Number,
    vin: String,
    askingPrice: Number,
    sellByDate: Date,
    image: String,
})
</script>

<template>
    <h1>
    <span>
        {{ year }}
    </span>
        <span>
        {{ make }}
    </span>
        <span>
        {{ classic }}
    </span>
    </h1>
    <img :src="'/images/' + image" alt="asdf">
    <section>
        <p>
            <span>
                Mileage:
            </span>
            <span>
                {{ mileage }}
            </span>
        </p>
        <p>
            <span>
                VIN:
            </span>
            <span>
                {{ vin }}
            </span>
        </p>
        <p>
            <span>
                Asking Price:
            </span>
            <span>
                ${{ askingPrice }}
            </span>
        </p>
        <p>
            <span>
                Sell By Date:
            </span>
            <span>
                {{ sellByDate }}
            </span>
        </p>
    </section>
</template>
