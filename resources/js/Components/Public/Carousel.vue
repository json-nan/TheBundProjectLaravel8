<template>
    <div class="z-1 relative flex h-full overflow-hidden slider-container">
        <swiper
            class="swiper"
            navigation
            :modules="modules"
            :loop="true"
            :autoplay="{
                delay: 2500,
                disableOnInteraction: false,
            }"
        >
            <swiper-slide class="">
                <div class="flex">
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
                            hidden
                            sm:flex
                            items-end
                            justify-between
                            p-8
                        "
                    >
                        <div class="flex flex-col text-white pl-10 2xl:pl-14">
                            <div
                                class="
                                    font-extrabold
                                    text-5xl
                                    lg:text-7xl
                                    2xl:text-9xl
                                "
                            >
                                Presentando
                            </div>
                            <div
                                class="
                                    font-extralight
                                    text-4xl
                                    lg:text-6xl
                                    2xl:text-8xl
                                "
                            >
                                Evolving New Design
                            </div>
                        </div>
                        <div>
                            <Link
                                as="button"
                                class="
                                    bg-secondary
                                    py-3
                                    px-10
                                    rounded-full
                                    text-neutral
                                    flex
                                    items-center
                                    justify-center
                                    w-auto
                                    gap-4
                                "
                                href="/designers"
                                type="button"
                            >
                                <div class="flex justify-center items-center">
                                    <span>{{ __("About Us") }}</span>
                                </div>
                            </Link>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="flex">
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
                            hidden
                            sm:flex
                            items-end
                            justify-between
                            p-8
                        "
                    >
                        <div class="flex flex-col text-white pl-10 2xl:pl-14">
                            <div
                                class="
                                    font-extrabold
                                    text-5xl
                                    lg:text-7xl
                                    2xl:text-9xl
                                "
                            >
                                Mutualismo
                            </div>
                            <div
                                class="
                                    font-extralight
                                    text-4xl
                                    lg:text-6xl
                                    2xl:text-8xl
                                "
                            >
                                Ya disponible episodio 01
                            </div>
                        </div>
                        <div>
                            <Link
                                as="button"
                                class="
                                    bg-secondary
                                    py-3
                                    px-10
                                    rounded-full
                                    text-neutral
                                    flex
                                    items-center
                                    justify-center
                                    w-auto
                                    gap-4
                                "
                                href="/designers"
                                type="button"
                            >
                                <div class="flex justify-center items-center">
                                    <span>{{ __("Play Now") }}</span>
                                </div>
                            </Link>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="flex">
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
                            hidden
                            sm:flex
                            items-end
                            justify-between
                            p-8
                        "
                    >
                        <div class="flex flex-col text-white pl-10 2xl:pl-14">
                            <div
                                class="
                                    font-extrabold
                                    text-5xl
                                    lg:text-7xl
                                    2xl:text-9xl
                                "
                            >
                                Patronaje
                            </div>
                            <div
                                class="
                                    font-extralight
                                    text-4xl
                                    lg:text-6xl
                                    2xl:text-8xl
                                "
                            >
                                Videotutorial ya disponible
                            </div>
                        </div>
                        <div>
                            <Link
                                as="button"
                                class="
                                    bg-secondary
                                    py-3
                                    px-10
                                    rounded-full
                                    text-neutral
                                    flex
                                    items-center
                                    justify-center
                                    w-auto
                                    gap-4
                                "
                                href="/designers"
                                type="button"
                            >
                                <div class="flex justify-center items-center">
                                    <span>{{ __("Play Now") }}</span>
                                </div>
                            </Link>
                        </div>
                    </div>
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
import { Link } from "@inertiajs/inertia-vue3";

// install Swiper modules

export default {
    name: "Carousel",
    components: { Swiper, SwiperSlide, Link },
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
