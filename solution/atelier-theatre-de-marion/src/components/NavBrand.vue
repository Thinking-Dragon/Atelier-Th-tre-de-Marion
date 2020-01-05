<template>
    <div class="border navbrand">
        <router-link to="/">
            <img src="@/assets/brand/logo-brown.svg" alt="Atelier-Théâtre de Marion">
        </router-link>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="less">
    .navbrand {
        background-image: linear-gradient(rgba(255, 255, 255, 0.493), rgba(255, 228, 233, 0.493));
        border-radius: 2.5vw;

        img {
            width: 100%;
        }
    }
</style>