<script setup>
import Header from "@/Components/Header.vue";

defineProps({
    year: String,
    make: String,
    classic: String,
    mileage: Number,
    vin: String,
    askingPrice: Number,
    sellByDate: Date,
    image: String,
    sellerLastName: String,
    sellerFirstName: String,
})
</script>

<template>
    <Header/>
    <main>
        <div class="wrapper">
            <h1>
            <span>
                {{ year }}
            </span>
                <div>
                <span>
                    {{ make }}
                </span>
                    <span>
                    {{ classic }}
                </span>
                </div>
            </h1>
            <img :src="'/images/' + image" alt="Auctioned Vehicle">
            <section class="content-section">
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
                <p>
                    <span>
                        Vendor:
                    </span>
                    <span>
                        {{ sellerFirstName }} {{ sellerLastName }}
                    </span>
                </p>
            </section>
            <button type="button">
                Place Bid
            </button>
        </div>
    </main>
</template>

<style scoped>
main {
    min-height: 100vh;
    margin: 5rem 0;
    padding: 0 .5rem;

    display: flex;
    flex-flow: column nowrap;
}

.wrapper {
    max-width: 40rem;
    margin: 0 auto;
}

h1 {
    margin: 0 0 1rem 0;

    display: flex;
    flex-flow: column nowrap;

    font-weight: 700;
}

h1 > div > span:first-child {
    margin: 0 0.25rem 0 0;
}

img {
    width: 100%;
    max-width: 25rem;

    border-radius: 5px;
}

.content-section {
    width: 100%;
    max-width: 25rem;
    margin: 1.5rem 0 0;

    font-size: 0.85rem;
}

.content-section > p {
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
}

button {
    position: relative;
    left: 50%;

    margin: 2rem 0;
    padding: 0.25rem 1rem;

    font-weight: 600;
    color: var(--tertiary-accent);
    border: 2px solid var(--tertiary-accent);
    border-radius: 5px;

    transform: translateX(-50%);
    transition: color, background-color 250ms ease-in-out;
}

button:hover {
    color: var(--primary-dark);
    background-color: var(--tertiary-accent);
}

button:focus {
    outline: 2px solid var(--primary-accent);
}

button:active {
    opacity: 0.85;
}
</style>
