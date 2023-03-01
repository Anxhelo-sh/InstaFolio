<template>
    <div class="profile py-3 px-2">
        <div class="d-flex justify-content-between align-content-center align-items-center ">
            <div class="profile-menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
            </div>
            <div class="d-flex align-items-center align-content-center justify-content-between gap-2">
                <div class="username">{{ user.name }}</div>
                <div class="verified">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                    </svg>
                </div>
            </div>
            <div class="profile-menu-icon" @click="activeMenu=true">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                </svg>
            </div>
        </div>
        <div class="profile-header d-flex justify-content-between align-content-center align-items-center py-3">
            <div>
                <img class="profile-picture" src="/storage/images/stories/first.png" alt="profile-picture">
            </div>
            <div class="d-flex justify-content-between align-items-center align-content-center gap-3">
                <div class="d-flex justify-content-between align-content-center align-items-center flex-column">
                    <div>{{ projectsCount }}</div>
                    <div v-if="projectsCount !== 1" class="fw-bold">Projects</div>
                    <div v-else class="fw-bold">Project</div>
                </div>
                <div class="d-flex justify-content-between align-content-center align-items-center flex-column">
                    <div>1 Year</div>
                    <div class="fw-bold">Experience</div>
                </div>
                <div class="d-flex justify-content-between align-content-center align-items-center flex-column">
                    <div>1,234</div>
                    <div class="fw-bold">Followers</div>
                </div>
            </div>
        </div>
        <div class="profile-info">
            <div>username</div>
            <div class="job-title">
                Full Stack Developer
            </div>
            <ReadMore :text="msg" link="#" less-str="read less" :max-chars="50"></ReadMore>
        </div>
        <div class="d-flex justify-content-start align-items-center align-content-center py-3">
            <div class="user-reviews">
                <img class="user-thumbnail1" src="/storage/images/stories/first.png" alt="user">
                <img class="user-thumbnail2" src="/storage/images/stories/first.png" alt="user">
                <img class="user-thumbnail3" src="/storage/images/stories/first.png" alt="user">
            </div>
            <div>Reviewed by total.gg and 100 others</div>
        </div>
        <div class="py-1 px-1">
          <button class="follow-button">Follow</button>
        </div>
        <div class="d-flex justify-content-between align-content-center align-items-center px-1 py-1">
            <div>
                <button class="action-buttons">Message</button>
            </div>
            <div>
                <button class="action-buttons">Subscribe</button>
            </div>
            <div>
                <button class="action-buttons">Contact</button>
            </div>
        </div>
        <Stories></Stories>
        <div class="content-buttons d-flex justify-content-between align-content-center align-items-center px-4 py-1">
            <div class="menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                </svg>
            </div>
            <div class="menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                </svg>
            </div>
            <div class="menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div v-for="project in projects" :key="project.id" class="col-4 post-container">
                    <a :href="'/projects/'+ project.id">
                        <img class="post-user" :src="Object.values(JSON.parse(project.images))[0]" alt="post">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <Menu v-if="activeMenu" @close-menu="activeMenu=false" :user="user"></Menu>
</template>

<script>
import ReadMore from "../Feed/ReadMore";
import Stories from "../Feed/Stories";
import Menu from "../User-Profile/Menu"

export default {
    name: "Profile",
    props: ['user', 'projects'],
    components:{
        ReadMore,
        Stories,
        Menu,
    },
    data () {
        return {
            activeMenu:false,
            projectsCount : 0,
            msg: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
            msg2: 'Lorem ipsum dolor sit amet'
        }
    },
    mounted() {
     this.projectsCount = this.projects.length
    }

}
</script>

<style>
.profile-menu-icon {
    width: 25px;
}

.username {
    font-size: 20px;
}

.verified {
    color: #0b5ed7;
    width: 25px;
}

.profile-picture {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.job-title{
    color: rgba(255, 255, 255, 0.5);
}
.user-reviews{
    width: 120px;
    position: relative;
}
.user-thumbnail1, .user-thumbnail2, .user-thumbnail3{
    width: 25px;
    height: 25px;
    border-radius: 50%;
    position: absolute;
    bottom: -12px;
}
.user-thumbnail2{
    left: 15px;
}
.user-thumbnail3{
    left: 30px;
}
.follow-button{
    background: #1FA1FF;
    border: none;
    color: white;
    width: 100%;
    font-size: 13px;
    padding: 5px 10px;
}
.action-buttons{
    background: rgba(239, 239, 239, 0.2);
    padding: 4px 20px;
    border: none;
    color: white;
    font-size: 13px;
    border-radius: 3px;
}
.menu-button{
    width: 30px;
    color: white;
}
.post-user{
    height: 130px;
    width: 100%;
}
.post-container{
    padding: 0;
    border-bottom: 1px solid white;
    border-left: 1px solid white;
}
.content-buttons{
    height: 50px;
}
</style>
