<template>
    <div namespace="workshop-card">
        <div class="card mb-3" :style="cssProps">
            <div class="card-header">{{ title }}</div>
            <div class="card-body" :style="bgImage">
                <p class="card-text">{{ details }}</p>
                <button class="btn btn-primary">Demander des plus d'informations</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        accentColour: String,
        image: String,
        details: String
    },
    computed: {
        cssProps() {
            return {
                '--colour': 'var(--' + this.accentColour + ')',
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
    [namespace=workshop-card] {
        div.card {
            border-top: 3px solid var(--colour)
        }

        div.card-body {
            background-color: var(--image)
        }
    }
</style>