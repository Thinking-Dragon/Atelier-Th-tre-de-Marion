<template>
    <div class="nav-btn">
        <router-link :to="route" style="text-decoration: none;">
            <div class="card" :style="bgImage" v-bind:class="{'compact': isCompact}">
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
        isCompactCallback: {
            type: Function,
            default: () => {}
        }
    },
    computed: {
        bgImage() {
            return {
                'background-image': 'url(' + require('@/assets/' + this.image) + ')',
                'background-size': 'cover'
            };
        },
        isCompact() {
            return this.isCompactCallback();
        }
    }
}
</script>

<style lang="less">    
    .nav-btn {
        .card {
            margin-top: 5vh;
            height: 20rem;
            padding: auto;
            display: flex;
            align-items: center;
            justify-content: center;

            span {
                color: rgb(221, 221, 221);
                text-shadow: 0 1px 3px black;
            }

            border-radius: 10px;

            transition: all 500ms;
            -moz-transition: all 500ms;
            -o-transition: all 500ms;
            -webkit-transition: all 500ms;
        }

        .card:hover {
            --hover-shadow-overlay-colour: #50505057;
            box-shadow: inset 100px 0px 100px -25px var(--hover-shadow-overlay-colour),
                        inset -100px 0px 100px -25px var(--hover-shadow-overlay-colour),
                        inset 0px 100px 100px -50px var(--hover-shadow-overlay-colour),
                        inset 0px -100px 100px -50px var(--hover-shadow-overlay-colour);
        }

        .card.compact {
            --compact-scale: 0.8;

            margin-top: 0vh;
            height: 5rem;

            transform: scale(var(--compact-scale));
            -moz-transform: scale(var(--compact-scale));
            -o-transform: scale(var(--compact-scale));
            -ms-transform: scale(var(--compact-scale));
            -webkit-transform: scale(var(--compact-scale));
        }
    }

    .router-link-active .card {
        background: #00000033;
    }
</style>