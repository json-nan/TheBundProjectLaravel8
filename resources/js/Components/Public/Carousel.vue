<template>
    <div class="z-1 relative flex h-full overflow-hidden slider-container">
        <swiper
            class="swiper"
            navigation
            :modules="modules"
            :loop="true"
            :autoplay="{
                delay: 1750,
                disableOnInteraction: false,
            }"
        >
            <swiper-slide class="">
                <div class="relative flex">
                    <img
                        src="/storage/homepage/01_COVER.png"
                        alt=""
                        class="w-full"
                    />
                    <div
                        class="
                            absolute
                            profile-filter
                            min-h-full min-w-full
                            z-10
                        "
                    ></div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="relative flex">
                    <img
                        src="/storage/homepage/02_COVER.jpg"
                        alt=""
                        class="w-full"
                    />
                    <div
                        class="
                            absolute
                            profile-filter
                            min-h-full min-w-full
                            z-10
                        "
                    ></div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="relative flex">
                    <img
                        src="/storage/homepage/03_COVER.jpg"
                        alt=""
                        class="w-full"
                    />
                    <div
                        class="
                            absolute
                            profile-filter
                            min-h-full min-w-full
                            z-10
                        "
                    ></div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script>
import { Navigation, Autoplay } from "swiper";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

// install Swiper modules

export default {
    name: "Carousel",
    components: { Swiper, SwiperSlide },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [Navigation, Autoplay],
        };
    },
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 150px 150px rgba(0, 0, 0, 0.6);
}
.slider-container {
    max-height: 80vh;
}
</style>
