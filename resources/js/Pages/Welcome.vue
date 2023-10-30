<script setup>
import {Head, Link} from '@inertiajs/vue3';
import Header from "@/Components/Header.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Home"/>
    <Header/>
    <main>
        <section>
            <h1>
            <span>
                Build a Car Collection
            </span>
                <span>
                Worth Coveting
            </span>
            </h1>
            <p>
                <span>
                    Discover your favorites today.
                </span>
                <span>
                    Build barn finds from the bottom up or
                </span>
                <span>
                    cruise in a mint cherry of your dreams.
                </span>
            </p>
        </section>
        <section class="cta-section" v-if="canLogin">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="auth-link"
            >Dashboard
            </Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="auth-link left-auth-link"
                >Log in
                </Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="auth-link"
                >Register
                </Link
                >
            </template>
        </section>
        <img src="/images/mustang-gt500.png" alt="Mustang GT500">
    </main>
</template>

<style scoped>
main {
    position: relative;

    margin: clamp(5rem, 15vw, 20rem) 0 0 clamp(.125rem, 5vw, 15rem);

    display: flex;
    flex-flow: column nowrap;
}

h1 > span {
    display: table;

    font-size: clamp(1.5rem, 3vw, 2.5rem);
    font-weight: 800;
    line-height: clamp(1.75rem, 4vw, 3rem);
}

p {
    opacity: .8;
    font-size: clamp(0.95rem, 3vw, 1.5rem);
    font-weight: 600;
}

p > span {
    display: table;
}

.cta-section {
    margin: 2rem 0 0;
}

.auth-link {
    padding: .25rem .75rem;

    font-size: clamp(0.95rem, 3vw, 1.125rem);
    font-weight: 600;
    color: var(--primary-accent);
    border: 2px solid var(--primary-accent);
    border-radius: 5px;
    opacity: .8;
}

.left-auth-link {
    margin: 0 clamp(1.25rem, 3vw, 1.5rem) 0 0;
}

img {
    position: fixed;
    right: 0;
    bottom: -100px;

    width: 75%;
    max-width: 800px;
    margin: 0 0 12rem 0;
}
@media (min-width: 800px) {
    img {
        margin: 0;
    }
}
</style>
