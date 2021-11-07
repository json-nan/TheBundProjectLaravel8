<template>
    <Head title="TheBundProject" />
    <PagesLayout :page-title="pageTitle">
        <modal
            :show="showYoutubeModal"
            maxWidth="3xl"
            @close="showYoutubeModal = false"
        >
            <youtube-player-modal></youtube-player-modal>
        </modal>

        <div class="w-full justify-center flex">
            <div
                class="
                    container
                    flex
                    justify-between
                    items-center
                    justify-center
                "
            >
                <div class="flex flex-col p-20 max-w-3/4 gap-3 justify-center">
                    <div class="flex gap-8">
                        <img
                            alt=""
                            class="w-20"
                            src="/images/end/End Logotipo Mediano Azul.svg"
                        />
                        <span class="text-2xl font-bold">
                            {{ getParsedPodcastId(currentPodcast.id) }}
                            Podcast</span
                        >
                    </div>
                    <div class="text-3xl text-secondary font-bold">
                        <span>{{ currentPodcast.name }}</span>
                    </div>
                    <div>
                        <span>{{ currentPodcast.description }}</span>
                    </div>
                    <div class="flex justify-end gap-2">
                        <a
                            v-for="link in currentPodcast.links"
                            :href="link.url"
                            class="bg-primary p-1 rounded-md"
                        >
                            <img
                                :src="getPodcastIconUrl(link.platform)"
                                alt=""
                                class="w-8"
                            />
                        </a>
                    </div>
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
                >
                    <div class="w-full relative flex rounded-md">
                        <img
                            :src="getPodcastImageUrl(currentPodcast.image)"
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
                                Podcast
                                {{ getParsedPodcastId(currentPodcast.id) }}
                            </span>
                            <span class="text-xl font-bold">
                                {{ currentPodcast.name }}
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
                            pt-4
                            pb-2
                            px-3
                            bg-secondary
                            text-neutral
                            flex
                            justify-between
                        "
                    >
                        <span> {{ currentPodcast.duration }} </span>
                        <span> {{ currentPodcast.date }} </span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="
                w-full
                bg-gradient-to-r
                via-accent
                from-black
                to-black
                py-8
                mt-6
                -mb-8
                px-10
                overflow-x-visible
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
                    v-for="podcast in podcasts"
                    :key="podcast.id"
                    class="
                        rounded-xl
                        cursor-pointer
                        bg-white
                        flex
                        items-center
                        justify-center
                    "
                    @click="currentPodcast = podcast"
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
                            v-if="currentPodcast.id !== podcast.id"
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
                            :src="getPodcastImageUrl(podcast.image)"
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
                                            getParsedPodcastId(podcast.id)
                                        }}</span
                                    >
                                </div>

                                <span class=""> Podcast</span>
                            </div>
                            <div class="text-primary text-xl font-bold">
                                <span>
                                    {{ podcast.name }}
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
    name: "Podcasts",
    data: () => {
        return {
            pageTitle: "Podcasts",
            showYoutubeModal: false,
            video: "",
            currentPodcast: 0,
            modules: [Navigation],
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 35,
                },
            },
        };
    },
    methods: {
        getPodcastImageUrl(value) {
            return `/storage/podcasts/images/${value}`;
        },
        getParsedPodcastId(value) {
            return (value < 10 ? "0" : "") + value;
        },
        getPodcastIconUrl(value) {
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
        podcasts: {
            type: Array,
            default: () => [],
        },
    },
    mounted() {
        this.currentPodcast = this.podcasts?.[0];
    },
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 130px 120px rgba(0, 0, 0, 0.6);
}
</style>
