<template>
    <div>
        <span v-if="!readMoreActivated">{{ longText.slice(0, 75) }}   </span>
        <a class="more" v-if="!readMoreActivated" @click="activateReadMore" href="#">
            ... more
        </a>
        <span v-if="readMoreActivated" v-html="longText"></span>
    </div>
</template>
<script>
export default {
    name: "Readmore",
    data() {
        return {
            longText: `Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita harum illum magnam non?
            Fugit inventore saepe tempore totam voluptate.
             Commodi dolor doloremque illum incidunt laborum molestiae nesciunt odio voluptatem voluptatum!
`,
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
