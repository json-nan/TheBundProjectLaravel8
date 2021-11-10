<template>
    <Head title="TheBundProject" />
    <PagesLayout :page-title="pageTitle">
        <modal
            :show="showYoutubeModal"
            maxWidth="4xl"
            @close="showYoutubeModal = false"
        >
            <youtube-player-modal
                :src="currentWorkshop.url"
                :title="currentWorkshop.name"
            ></youtube-player-modal>
        </modal>

        <div class="w-full justify-center flex">
            <div
                class="
                    container
                    flex
                    justify-between
                    items-center
                    justify-center
                    flex-col
                    sm:flex-row
                "
            >
                <div
                    class="
                        flex flex-col
                        p-8
                        sm:p-20 sm:max-w-3/4
                        gap-6
                        justify-center
                    "
                >
                    <!-- Header -->
                    <div class="flex flex-col gap-4">
                        <p class="text-primary font-bold">
                            {{ __("large-texts.rooms.description") }}
                        </p>
                        <h1 class="text-6xl font-bold text-accent uppercase">
                            {{ __("Do it by yourself") }}
                        </h1>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div
                        class="flex gap-8 flex-col mt-12"
                        v-if="currentWorkshop?.name"
                    >
                        <div>
                            <img
                                alt=""
                                class="w-20"
                                src="/images/end/END Formas.svg"
                            />
                        </div>
                        <div class="flex gap-4 items-center">
                            <img
                                alt=""
                                class="w-20"
                                src="/images/end/End Logotipo Mediano Azul.svg"
                            />
                            <span class="text-2xl font-bold">
                                {{ getParsedWorkshopId(currentWorkshop.id) }}
                                Room</span
                            >
                        </div>
                    </div>
                    <div
                        class="text-3xl text-accent font-bold"
                        v-if="currentWorkshop?.name"
                    >
                        <span>{{ currentWorkshop.name }}</span>
                    </div>
                    <div v-if="currentWorkshop?.name">
                        <span>{{ currentWorkshop.description }}</span>
                    </div>
                    <div
                        class="flex justify-end gap-2"
                        v-if="currentWorkshop?.name"
                    >
                        <a
                            v-for="link in currentWorkshop.links"
                            :href="link.url"
                            class="bg-primary p-1 rounded-md"
                        >
                            <img
                                :src="getWorkshopIconUrl(link.platform)"
                                alt=""
                                class="w-8"
                            />
                        </a>
                    </div>
                    <!-- Content -->
                </div>
                <div
                    class="
                        w-auto w-72
                        h-72
                        md:w-96 md:h-96
                        flex flex-col
                        justify-center
                        items-center
                        cursor-pointer
                        relative
                    "
                    v-if="currentWorkshop?.name"
                    @click="showYoutubeModal = true"
                >
                    <div class="w-full relative flex rounded-md">
                        <img
                            :src="getWorkshopImageUrl(currentWorkshop.image)"
                            class="rounded-xl"
                        />
                        <div
                            class="
                                h-full
                                w-full
                                absolute
                                text-white
                                z-50
                                flex flex-col
                                justify-end
                                p-6
                                rounded-md
                            "
                        >
                            <span class="text-4xl font-bold">
                                Workshop
                                {{ getParsedWorkshopId(currentWorkshop.id) }}
                            </span>
                            <span class="text-xl font-bold">
                                {{ currentWorkshop.name }}
                            </span>
                        </div>
                        <div
                            class="
                                absolute
                                h-full
                                w-full
                                flex
                                items-center
                                justify-center
                                text-neutral
                                bg-gradient-to-t
                                from-black
                                rounded-md
                            "
                        >
                            <svg
                                fill="currentColor"
                                height="70"
                                viewBox="0 0 24 24"
                                width="70"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path d="M21 12l-18 12v-24z" />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="
                            w-full
                            rounded-md
                            -mt-2
                            pt-6
                            pb-4
                            px-3
                            bg-secondary
                            text-neutral
                            flex
                            justify-between
                        "
                    >
                        <span> {{ currentWorkshop.duration }} </span>
                        <span> {{ currentWorkshop.date }} </span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="
                w-full
                bg-secondary
                py-8
                mt-10
                -mb-8
                px-10
                overflow-x-visible
                mt-10
            "
        >
            <swiper
                :breakpoints="breakpoints"
                :centeredSlidesBound="true"
                :loop="true"
                :modules="modules"
                navigation
            >
                <swiper-slide
                    v-for="workshop in workshops"
                    :key="workshop.id"
                    class="
                        rounded-xl
                        cursor-pointer
                        bg-white
                        flex
                        items-center
                        justify-center
                    "
                    @click="currentWorkshop = workshop"
                >
                    <div
                        class="
                            grid grid-cols-3
                            rounded-xl
                            relative
                            overflow-hidden
                            relative
                        "
                    >
                        <div
                            v-if="currentWorkshop.id !== workshop.id"
                            class="
                                absolute
                                w-full
                                h-full
                                bg-black
                                opacity-50
                                z-50
                            "
                        ></div>
                        <img
                            :src="getWorkshopImageUrl(workshop.image)"
                            alt="Profile image"
                            class="z-0 w-full"
                        />
                        <div
                            class="
                                col-span-2
                                text-neutral
                                font-sans font-bold
                                z-10
                                flex flex-col
                                justify-center
                                ml-5
                            "
                        >
                            <div
                                class="
                                    flex
                                    gap-2
                                    text-primary
                                    items-center
                                    text-sm
                                    font-light
                                "
                            >
                                <div class="flex items-center gap-1">
                                    <div class="w-2 h-2 bg-secondary"></div>
                                    <span class="">
                                        {{
                                            getParsedWorkshopId(workshop.id)
                                        }}</span
                                    >
                                </div>

                                <span class=""> Workshop</span>
                            </div>
                            <div class="text-primary text-xl font-bold">
                                <span>
                                    {{ workshop.name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
    </PagesLayout>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import { Head } from "@inertiajs/inertia-vue3";
import PagesLayout from "../Layouts/PagesLayout";
import Modal from "../Jetstream/Modal";
import YoutubePlayerModal from "../Components/Public/YoutubePlayerModal";
import { Navigation } from "swiper";

export default {
    components: { YoutubePlayerModal, Modal, PagesLayout, Swiper, SwiperSlide },
    name: "Handrooms",
    data: () => {
        return {
            pageTitle: "Handrooms",
            showYoutubeModal: false,
            video: "",
            currentWorkshop: 0,
            modules: [Navigation],
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 600,
                },
            },
        };
    },
    methods: {
        getWorkshopImageUrl(value) {
            return `/storage/workshops/images/${value}`;
        },
        getParsedWorkshopId(value) {
            return (value < 10 ? "0" : "") + value;
        },
        getWorkshopIconUrl(value) {
            switch (value) {
                case "spotify":
                    return "/images/social_networks/Blanco/Spotify White.svg";
                case "soundcloud":
                    return "/images/social_networks/Blanco/SoundCloud White.svg";
                default:
                    return "/images/social_networks/Blanco/Spotify White.svg";
            }
        },
    },
    props: {
        workshops: {
            type: Array,
            default: () => [],
        },
    },
    mounted() {
        this.currentWorkshop = this.workshops?.[0] || {};
    },
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 130px 120px rgba(0, 0, 0, 0.6);
}
</style>
