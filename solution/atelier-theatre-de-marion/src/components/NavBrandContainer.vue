<template>
  <div class="navbrand-container" v-bind:class="{'compact': isCompact}">
        <NavBrand />
        <a href="javascript:void" v-b-modal.contact-us-modal>Contactez-nous!</a>
        <b-modal id="contact-us-modal" title="BootstrapVue">
            <p class="my-4">Hello from modal!</p>
        </b-modal>
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
    data() {
        return {
            showContactUsModal: false
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