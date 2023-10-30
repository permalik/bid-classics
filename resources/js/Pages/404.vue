<script setup>

</script>

<template>
    <div class="wrapper">
        <img src="/images/track.png" alt="Vehicle skid marks">
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
    </div>
</template>

<style scoped>
img {
    max-height: 100vh;

    position: absolute;
    top: 0;
    right: 0;
}
.wrapper {
    position: relative;
}
p > span {
    display: table;
}
</style>
