<template>
    <div id="nav" class="row">
        <NavButton class="offset-1 col-2" title="Ateliers artistiques" route="/kids-workshops"/>
        <NavButton class="col-2" title="Cours de formation" route="/masterclasses"/>
        <div class="col-2">
            <NavBrand/>
            <router-link to="/contact-us">Contactez-nous!</router-link>
        </div>
        
        <NavButton class="col-2" title="Boutique" route="/shop"/>
        <NavButton class="col-2" title="Mission" route="/mission"/>
    </div>
</template>

<style lang="less">
    #nav{

    }
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