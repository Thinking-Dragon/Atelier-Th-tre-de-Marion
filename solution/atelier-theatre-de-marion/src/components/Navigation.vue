<template>
    <div id="nav" class="row">
        <div class="col-5 row">
            <NavButton
                class="col-6"
                title="Ateliers artistiques"
                route="/kids-workshops"
                image="navigation/images/1.jpg"
                :isCompactCallback="isCompact"
            />
            <NavButton
                class="col-6"
                title="Cours de formation"
                route="/masterclasses"
                image="navigation/images/2.jpg"
                :isCompactCallback="isCompact"
            />
        </div>
        <NavBrandContainer class="col-2" :isCompactCallback="isCompact" />
        <div class="col-5 row">
            <NavButton
                class="col-6"
                title="Boutique"
                route="/shop"
                image="navigation/images/3.jpg"
                :isCompactCallback="isCompact"
            />
            <NavButton
                class="col-6"
                title="Mission"
                route="/mission"
                image="navigation/images/4.jpg"
                :isCompactCallback="isCompact"
            />
        </div>
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
    },
    methods: {
        isCompact() {
            return this.$route.name != 'home';
        }
    }
}
</script>