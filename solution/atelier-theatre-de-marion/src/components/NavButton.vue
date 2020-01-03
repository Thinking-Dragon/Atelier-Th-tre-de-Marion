<template>
    <div class="nav-btn">
        <router-link :to="route" style="text-decoration: none;">
            <div class="card">
                <div class="card-header">
                    <span>{{ title }}</span>
                </div>
                <div class="card-body" :style="bgImage">

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
        },
        bgImage() {
            return {
                'background-image': 'url(' + require('@/assets/' + this.image) + ')'
            }
        }
    }
}
</script>

<style lang="less">
    
    .nav-btn{
        .card{
            background-image: var(--bg-image);
            margin-top: 30vh;

            .card-header{
                background-image: linear-gradient(white, pink);
                min-height: 4.55rem;
                padding: auto;
                display: flex;
                align-items: center;
                justify-content: center;

            }

            .card-body{
                min-height: 10rem;
            }

        }
    }
</style>