<template>
    <div id="nav" class="row">
        <div class="col-5 row">
        <NavButton
            class="offset-1 col-2"
            title="Ateliers artistiques"
            route="/kids-workshops"
            image="logo.png"
        />
        <NavButton
            class="col-2"
            title="Cours de formation"
            route="/masterclasses"
            image="logo.png"
        />
        <div class="col-2">
            <NavBrand/>
            <router-link to="/contact-us">Contactez-nous!</router-link>
        </div>
        
        <NavButton
            class="col-2"
            title="Boutique"
            route="/shop"
            image="logo.png"
        />
        <NavButton
            class="col-2"
            title="Mission"
            route="/mission"
            image="logo.png"
        />
    </div>
</template>

<style lang="less">
    
</style>

<script>

import NavButton from '@/components/NavButton.vue'
import NavBrand from '@/components/NavBrand.vue'

export default {
    components: {
        NavButton,
        NavBrand
    }
}
</script>