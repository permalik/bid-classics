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
        <div v-if="canLogin">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            >Dashboard
            </Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Log in
                </Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Register
                </Link
                >
            </template>
        </div>
    </main>
</template>

<style scoped>
main {
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
</style>
