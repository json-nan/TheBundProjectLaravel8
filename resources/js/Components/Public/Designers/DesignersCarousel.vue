<template>
    <div class="flex flex-col gap-6">
        <modal
            :show="showDesignerModal"
            maxWidth="3xl"
            @close="toggleDesignerModal(false)"
        >
            <designer-info-modal
                :designer="selectedDesigner"
            ></designer-info-modal>
        </modal>
        <div
            class="
                text-2xl
                sm:text-5xl
                font-bold
                py-5
                px-5
                sm:px-20
                text-gray-800
            "
        >
            Lo más destacado
        </div>
        <div class="w-full flex justify-center">
            <div class="w-full">
                <swiper
                    :breakpoints="breakpoints"
                    :loop="true"
                    :modules="modules"
                    navigation
                    class="px-10"
                >
                    <swiper-slide
                        v-for="designer in designers"
                        :key="designer.id"
                        class="cursor-pointer"
                        @click="toggleDesignerModal(true, designer)"
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
                                :src="
                                    getPictureUrl(
                                        designer.products_picture ||
                                            designer.profile_picture
                                    )
                                "
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
        <div
            class="
                flex
                justify-center
                items-center
                text-2xl
                sm:text-4xl
                font-bold
                mt-4
            "
        >
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
                    <span>Mostrar todos</span>
                </div>
                <div class="w-6 flex justify-center items-center">
                    <img alt="Arrow" src="/images/others/Flecha.svg" />
                </div>
            </Link>
        </div>
    </div>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import DesignerSlide from "./DesignerSlide";
import { Navigation } from "swiper";
import Modal from "../../../Jetstream/Modal";
import DesignerInfoModal from "./DesignerInfoModal";
import DialogModal from "../../../Jetstream/DialogModal";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "DesignersCarousel",
    components: {
        DialogModal,
        DesignerInfoModal,
        Modal,
        DesignerSlide,
        Swiper,
        SwiperSlide,
        Link,
    },

    data() {
        return {
            showDesignerModal: false,
            selectedDesigner: {},
        };
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
    methods: {
        toggleDesignerModal(show, designer = {}) {
            this.selectedDesigner = designer;
            this.showDesignerModal = show;
        },
        getPictureUrl(url) {
            return url.startsWith("http") ? url : "storage/" + url;
        },
    },
};
</script>

<style>
.profile-filter {
    box-shadow: inset 0 0 90px 50px rgba(0, 0, 0, 0.6);
}
</style>
