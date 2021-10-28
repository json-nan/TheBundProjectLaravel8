<template>
    <div class="flex flex-col gap-6">
        <div class="text-3xl font-bold px-20 text-gray-800">
            Nuestros diseñadores
        </div>
        <div class="w-full flex justify-center">
            <div class="w-full">
                <swiper
                    :breakpoints="breakpoints"
                    :loop="true"
                    :modules="modules"
                    navigation
                >
                    <swiper-slide
                        v-for="designer in designers"
                        :key="designer.id"
                        class=""
                    >
                        <div
                            class="
                                flex
                                justify-center
                                items-center
                                relative
                                rounded-xl
                                overflow-hidden
                            "
                        >
                            <img
                                :src="designer.profile_picture"
                                alt="Profile image"
                                class="z-0"
                            />
                            <div
                                class="
                                    absolute
                                    profile-filter
                                    min-w-full min-h-full
                                    z-10
                                "
                            ></div>
                            <div
                                class="
                                    absolute
                                    text-neutral
                                    left-0
                                    bottom-0
                                    font-sans font-bold
                                    z-10
                                    flex flex-col
                                    p-6
                                "
                            >
                                <span class="text-3xl">
                                    {{ designer.brand_name }}</span
                                >
                                <span> {{ designer.name }}</span>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <button class="bg-secondary py-3 px-10 rounded-full text-neutral">
                Mostrar todos ->
            </button>
        </div>
    </div>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import DesignerSlide from "./DesignerSlide";
import { Navigation } from "swiper";

export default {
    name: "DesignersCarousel",
    components: {
        DesignerSlide,
        Swiper,
        SwiperSlide,
    },

    props: {
        designers: {
            type: Array,
            default: () => [],
        },
    },
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
            modules: [Navigation],
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        };
    },
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 90px 50px rgba(0, 0, 0, 0.6);
}
</style>
