<template>
    <div class="post">
        <div class="post-header px-3 py-2">
            <div class="d-flex justify-content-start align-items-center align-content-center gap-2">
                <div>
                    <img class="post-thumbnail" src="/storage/images/posts/post-header.png" alt="post-thumbnail">
                </div>
                <div>
                    {{ project.user.name }}
                </div>
            </div>

            <div class="ellipsis">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </div>
        </div>
        <div class="post-body">
            <img class="post-body-content" src="/storage/images/posts/cat.jpg" alt="post">
        </div>
        <div class="post-actions d-flex justify-content-between align-content-center align-items-center px-3 py-2">
            <div class="d-flex justify-content-between align-items-center align-content-center gap-3">
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                    </svg>
                </div>
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>
                </div>
            </div>
            <div class="icons">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>
            </div>
        </div>
        <div class="px-3 py-2">
            <div class="d-flex align-content-center align-items-center justify-content-start gap-1">
                <div>
                    <img class="likes-thumbnail" src="/storage/images/posts/post-header.png" alt="liked-by">
                </div>
                <div>
                    Liked by scrop and 12,235 others
                </div>
            </div>
            <div class="description mb-1" >
                <ReadMore :text="project.description" link="#" less-str="read less" :max-chars="50"></ReadMore>
            </div>
            <div class="comments mb-1">
                view all 343 comments
            </div>
            <div class="comment mb-1 d-flex justify-content-between align-items-center align-content-center">
                <div class="d-flex gap-2">
                    <img class="user-thumbnail" src="/storage/images/stories/first.png" alt="user">
                    <input class="input-comment" type="text" placeholder="Add a comment...">
                </div>
                <div></div>
            </div>
            <div class="comments">
                {{ created_at }}
            </div>
        </div>
    </div>
</template>

<script>
import ReadMore from "./ReadMore";
import moment from 'moment';

export default {
    name: "Post",
    props: ['project'],
    components:{
        ReadMore,
    },
    data () {
        return {
            created_at : "",
        }
    },
    mounted(){
        this.created_at = moment(this.project.created_at).fromNow()
    }
}
</script>

<style>
.post{
    border-bottom: 1px solid rgba(224, 218, 218, 0.45);

}
.post-header {
    display: flex;
    justify-content: space-between;
    align-content: center;
    align-items: center;
}
.post-thumbnail{
    width: 30px;
    height: 30px;
    border-radius: 50%;
}
.ellipsis{
    color: white;
    width: 25px;
}
.post-body-content{
    width: 100%;
    height: 350px;
    padding: 0 3px;
}
.icons{
    width: 25px;
    color: white;
}
.likes-thumbnail{
    width: 15px;
    height: 15px;
    border-radius: 50%;
}
.description{
    display: inline;
}
.comments{
    color: rgba(255, 255, 255, 0.74);
}

.user-thumbnail{
    width: 25px;
    height: 25px;
    border-radius: 50%;
}
.input-comment{
    background: none;
    border: none;
    color: white;
}
.input-comment:focus{
    background: none;
    border: none;
}
</style>
