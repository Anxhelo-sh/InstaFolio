<template>
    <div class="stories">
        <carousel :items-to-show="settings.itemsToShow" :wrap-around="false">
            <slide v-for="slide in slides" :key="slide">
                <img class="slideIMG" :src="slide" alt="s1">
                <div class="text-white story-name">
                    story
                </div>
            </slide>
        </carousel>
    </div>
</template>

<script>
import 'vue3-carousel/dist/carousel.css'
import {Carousel, Slide, Pagination, Navigation} from 'vue3-carousel'

export default {
    name: "Stories",
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
    setup() {
        return {
            // carousel settings
            settings: {
                itemsToShow: 4,
                snapAlign: "left"
            },
            slides: [
                "/storage/images/stories/first.png",
                "/storage/images/stories/first.png",
                "/storage/images/stories/first.png",
                "/storage/images/stories/first.png",
                "/storage/images/stories/first.png",
                "/storage/images/stories/first.png",
            ],
            // breakpoints are mobile first
            // any settings not specified will fallback to the carousel settings
            breakpoints: {
                // 700px and up
                700: {
                    itemsToShow: 3.5,
                    snapAlign: "center"
                },
                // 1024 and up
                1024: {
                    itemsToShow: 5,
                    snapAlign: "start"
                }
            }
        };
    }

}
</script>

<style>
.stories {
    width: 100%;
    border-bottom: 1px solid rgba(224, 218, 218, 0.45);
    margin-top: var(--component-margin);
    padding-bottom: 5px;
}

.slideIMG {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.carousel__slide {
    justify-content: flex-start;
    flex-direction: column;
}
.story-name{
    font-size: 14px;
}
</style>
