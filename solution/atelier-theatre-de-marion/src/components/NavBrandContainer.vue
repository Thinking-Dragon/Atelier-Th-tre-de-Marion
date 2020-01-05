<template>
  <div class="navbrand-container" v-bind:class="{'compact': isCompact}">
        <NavBrand />
        <router-link to="/contact-us">Contactez-nous!</router-link>
  </div>
</template>

<script>
import NavBrand from '@/components/NavBrand.vue'

export default {
    props: {
        isCompactCallback: {
            type: Function,
            default: () => {}
        }
    },
    components: {
        NavBrand
    },
    computed: {
        isCompact() {
            return this.isCompactCallback();
        }
    }
}
</script>

<style>
    .navbrand-container {
        margin-top: 15vh;

        transition: all 500ms;
        -moz-transition: all 500ms;
        -o-transition: all 500ms;
        -webkit-transition: all 500ms;
    }

    .navbrand-container:hover {
        
    }

    .navbrand-container.compact {
        margin-top: 0;

        --compact-scale: 0.7;

        transform: scale(var(--compact-scale));
        -moz-transform: scale(var(--compact-scale));
        -o-transform: scale(var(--compact-scale));
        -ms-transform: scale(var(--compact-scale));
        -webkit-transform: scale(var(--compact-scale)) translateY(-75px);
    }
</style>