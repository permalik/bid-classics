<script setup>
import {ref} from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen">
            <div>
                <!-- Primary Navigation Menu -->
                <nav class="nav-container">
                    <Link href="/">
                        <span class="logo-container">
                            <img src="/images/logo.svg" alt="Steering wheel logo">
                            <span>Bid Classics</span>
                        </span>
                    </Link>

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <!-- Settings Dropdown -->
                        <div class="ml-3 relative">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="dropdown-button leading-4 transition ease-in-out duration-150"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                </template>

                                <template #content>
                                    <DropdownLink :href="route('dashboard')" :active="route().current('dashboard')">
                                        Dashboard
                                    </DropdownLink>
                                    <DropdownLink :href="route('vehicles')">
                                        Vehicles
                                    </DropdownLink>
                                    <DropdownLink :href="route('profile.edit')"> Profile</DropdownLink>
                                    <DropdownLink :href="route('logout')" method="post" as="button">
                                        Log Out
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button
                            @click="showingNavigationDropdown = !showingNavigationDropdown"
                            class="hamburger-button justify-center p-2 rounded-md focus:outline-none transition duration-150 ease-in-out"
                        >
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path
                                    :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                                <path
                                    :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                    </div>
                </nav>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-neutral-700">
                        <div class="px-4">
                            <div class="responsive-name">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="responsive-email">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('profile.edit')">Profile</ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </div>

            <main>
                <slot/>
            </main>
        </div>
    </div>
</template>
<style scoped>
.nav-container {
    padding: 0.5rem 1rem;

    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
}

.logo-container {
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
}

.logo-container > img {
    width: 2rem;
    height: 2rem;
    margin: 0 0.25rem 0 0;
}

.logo-container > span {
    font-family: 'Lobster', sans-serif;
    font-size: 1.25rem;
}

.dropdown-button {
    padding: 0.5rem 0.75rem;

    display: inline-flex;
    align-items: center;

    font-size: 0.95rem;
    font-weight: 600;
    background-color: var(--primary-dark-800);
    color: var(--primary-accent);
    border-radius: 5px;
}

.dropdown-button:hover {
    background-color: var(--primary-dark-700);
}

.dropdown-button:focus {
    outline: 1px solid var(--primary-accent);
}

.hamburger-button {
    display: inline-flex;
    align-items: center;

    color: var(--primary-accent);
}

.hamburger-button:hover {
    background-color: var(--primary-dark-700);
}

.hamburger-button:focus {
    background-color: var(--primary-dark-700);
    color: var(--primary-accent);
}

.responsive-name {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary-accent);
}

.responsive-email {
    font-size: 0.85rem;
    font-weight: 400;
    color: var(--primary-accent);
    opacity: 0.85;
}
</style>
