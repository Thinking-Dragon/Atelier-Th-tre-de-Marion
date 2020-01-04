<template>
    <div id="nav" class="row">
        <div class="col-5 row">
        <NavButton
            class="offset-1 col-2"
            title="Ateliers artistiques"
            route="/kids-workshops"
                image="navigation/images/1.jpg"
        />
        <NavButton
            class="col-2"
            title="Cours de formation"
            route="/masterclasses"
                image="navigation/images/2.jpg"
        />
        </div>
        <NavBrandContainer class="col-2" />
        <NavButton
            class="col-2"
            title="Boutique"
            route="/shop"
                image="navigation/images/3.jpg"
        />
        <NavButton
            class="col-2"
            title="Mission"
            route="/mission"
                image="navigation/images/4.jpg"
        />
    </div>
</template>

<style lang="less">
    
</style>

<script>

import NavButton from '@/components/NavButton.vue'
import NavBrandContainer from '@/components/NavBrandContainer.vue'

export default {
    components: {
        NavButton,
        NavBrandContainer
    }
}
</script>