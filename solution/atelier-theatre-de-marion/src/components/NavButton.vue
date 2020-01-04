<template>
    <div class="nav-btn">
        <router-link :to="route" style="text-decoration: none;">
            <div class="card" :style="bgImage" v-bind:class="{'compact': isCompactX}">
                <span>{{ title }}</span>
            </div>
        </router-link>
    </div>
</template>

<script>
export default {
    props: {
        route: String,
        title: String,
        image: {
            type: String,
            default: 'no-image.svg'
        },
    },
    computed: {
        isCompactX() {
            return this.$route.name != "home";
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
    * {
        --compact-scale: 0.8;
    }
    
    .nav-btn {
        .card {
            margin-top: 30vh;
            min-height: 8.55rem;
            padding: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            span {
                color: rgb(221, 221, 221);
                text-shadow: 0 1px 3px black;
            }
        }

        .card:hover {
            background: #00000033;
        }

        .card.compact {
            margin-top: 0;
            min-height: 6.55rem;

            transform: scale(var(--compact-scale));
            -moz-transform: scale(var(--compact-scale));
            -o-transform: scale(var(--compact-scale));
            -ms-transform: scale(var(--compact-scale));
            -webkit-transform: scale(var(--compact-scale));
        }

        * {
            transition: all 500ms;
            -moz-transition: all 500ms;
            -o-transition: all 500ms;
            -webkit-transition: all 500ms;
        }
    }
</style>