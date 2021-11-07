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
                        src="https://i.picsum.photos/id/652/1920/1080.jpg?hmac=LOlq3LJhW5-o8SVlXbNJ5J8OMvSw1DgvWzC6cJdmzZ0"
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
                        src="https://i.picsum.photos/id/8/1920/1080.jpg?hmac=ZWQsrAG-h-Ip98by6rfqjHRyvoEe1IKeeT2rbHCcoH4"
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
                        src="https://i.picsum.photos/id/277/1920/1080.jpg?hmac=NJd0HPJnJp1_n_X-9WCdFz9U9K1UAHgYAuFJgj0rZMU"
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
