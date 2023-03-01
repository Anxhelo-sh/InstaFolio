<template>
    <div>
        <span v-if="!readMoreActivated">{{ text.slice(0, 75) }}   </span>
        <a class="more" v-if="!readMoreActivated" @click="activateReadMore" href="#">
            ... more
        </a>
        <span v-if="readMoreActivated" v-html="text"></span>
    </div>
</template>
<script>
export default {
    name: "Readmore",
    props: ['text'],
    data() {
        return {
            readMoreActivated: false
        }
    },
    methods: {
        activateReadMore() {
            this.readMoreActivated = true;
        },
    }
}
</script>

<style>
.more {
    text-decoration: none;
    color: rgba(255, 255, 255, 0.77);
}
</style>
