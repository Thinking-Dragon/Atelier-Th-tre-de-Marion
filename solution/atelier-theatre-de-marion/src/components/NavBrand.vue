<template>
    <div id="brand" class="border">
        <router-link to="/">
            <img src="@/assets/brand/logo-brown.svg" alt="Atelier-Théâtre de Marion">
        </router-link>
    </div>
</template>

<script>
export default {
    
}
</script>

<style>
    #brand{
        background-image: linear-gradient(white, pink);
        border-radius: 2.5vw;
    }

    img{
        width: 100%;
    }
</style>