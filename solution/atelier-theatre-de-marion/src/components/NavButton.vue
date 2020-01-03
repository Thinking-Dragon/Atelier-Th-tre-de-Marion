<template>
    <div>
        <router-link :to="route">
            <div class="card">
                <div class="card-header bg-secondary">
                    {{ title }}
                </div>
                <div class="card-body">

                </div>
            </div>
        </router-link>
    </div>
</template>

<script>
export default {
    props: {
        route: String,
        title: String,
        image: String
    },
    computed: {
        cssProps() {
            return {
                '--bg-image': this.image
            }
        }
    }
}
</script>

<style lang="less">
    .card{
        background-image: var(--bg-image);

    }
</style>