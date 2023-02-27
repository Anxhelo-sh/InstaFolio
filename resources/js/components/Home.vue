<template>
    <NavigationBar></NavigationBar>
    <Stories></Stories>
    <Post></Post>
    <Post></Post>
    <Post></Post>
</template>

<script>
import NavigationBar from '../components/Feed/NavigationBar.vue'
import Stories from "./Feed/Stories";
import Post from "./Feed/Post";

export default {
    name: "Home",
    components:{
        NavigationBar,
        Stories,
        Post
    }
}
</script>

<style scoped>

</style>
