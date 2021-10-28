<template>
    <swiper-slide class="">
        <div
            class="
                flex
                justify-center
                items-center
                h-80
                relative
                rounded-xl
                overflow-hidden
            "
        >
            <img
                :src="designer?.profile_picture"
                alt="Profile image"
                class="min-w-full absolute z-0"
            />
            <div
                class="absolute profile-filter min-h-full min-w-full z-10"
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
                <span class="text-3xl"> {{ designer?.brand_name }}</span>
                <span> {{ designer?.name }}</span>
            </div>
        </div>
    </swiper-slide>
</template>

<script>
import { SwiperSlide } from "swiper/vue";
import "swiper/css";

export default {
    name: "DesignerSlide",
    components: {
        SwiperSlide,
    },
    props: {
        designer: {
            type: Object,
            default: () => {},
        },
    },
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 100px 60px rgba(0, 0, 0, 0.6);
}
</style>
