<template>
    <div class="flex flex-col gap-6">
        <div class="text-3xl font-bold px-20 text-gray-800">Nuestros diseñadores</div>
        <div>
            <swiper navigation :modules="modules"
                    :loop="true" :slides-per-view="4"
                    :space-between="50">

                <swiper-slide class="" v-for="designer in designers"
                              :key="designer.id">
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
                            :src="designer.profile_picture"
                            alt="Profile image"
                            class="min-w-full absolute z-0"
                        />
                        <div class="absolute profile-filter min-h-full min-w-full z-10"></div>
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
                            <span class="text-3xl"> {{ designer.brand_name }}</span>
                            <span> {{ designer.name }}</span>
                        </div>
                    </div>
                </swiper-slide>

                <!--                <designer-slide-->
                <!--                   -->
                <!--                    :designer="designer"-->
                <!--                ></designer-slide>-->
                <!--                <div slot="button-prev" class="swiper-button-prev"></div>-->
                <!--                <div slot="button-next" class="swiper-button-next"></div>-->
            </swiper>
        </div>
        <div class="flex justify-center items-center">
            <button class="bg-secondary py-3 px-10 rounded-full text-neutral">Mostrar todos -></button>
        </div>
    </div>
</template>

<script>
import {Swiper, SwiperSlide} from "swiper/vue";
import "swiper/css";
import DesignerSlide from "./DesignerSlide";
import {Navigation} from "swiper";

export default {
    name: "DesignersCarousel",
    components: {
        DesignerSlide,
        Swiper,
        SwiperSlide
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
            console.log('slide change');
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [Navigation],

        };
    },
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 150px 150px rgba(0, 0, 0, 0.6);
}
</style>
