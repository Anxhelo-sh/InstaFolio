<template>
    <NavigationBar></NavigationBar>
    <Stories :stories="stories"></Stories>
    <div v-for="project in projects" :key="project.id">
        <Post :project="project"></Post>
    </div>
</template>

<script>
import NavigationBar from '../components/Feed/NavigationBar.vue'
import Stories from "./Feed/Stories";
import Post from "./Feed/Post";

export default {
    name: "Home",
    props: [
        'projects',
        'stories'
    ],
    components: {
        NavigationBar,
        Stories,
        Post
    }
}
</script>

<style scoped>

</style>
