<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="wrapper">
        <section class="content">
            <div class="content-container">
                <h1>
                    Skrrrrr...
                </h1>
                <p>
                    <span>
                        Seems like you're off the beaten path.
                    </span>
                    <span>
                        This page isn't available.
                    </span>
                </p>
                <Link class="home-link">
                    Go Home
                </Link>
            </div>
        </section>
        <div>
            <img src="/images/track.png" alt="Vehicle skid marks">
        </div>
    </div>
</template>

<style scoped>
.wrapper {
    min-height: 100vh;

    display: flex;
    flex-flow: column nowrap;
    justify-content: space-between;
}

.content {
    display: flex;
    flex-flow: column nowrap;
}

.content-container {
    margin: 0 auto;
    padding: 3rem 0 0;
}

h1 {
    font-size: 3rem;
    font-weight: 900;
    line-height: 1;
}

p > span {
    display: table;
}

.home-link {
    display: inline-block;

    margin: 1.5rem 0 0;
    padding: .25rem 1rem;

    font-weight: 700;
    color: var(--primary-accent);
    border: 3px solid var(--primary-accent);
    border-radius: 5px;
}

.home-link:hover {
    background-color: var(--primary-accent);
    color: var(--primary-dark);
}

.home-link:active {
    opacity: .8;
}

.home-link:focus {
    outline: 1px solid white;
}

img {
    rotate: 90deg;

    object-fit: cover;

}
</style>
