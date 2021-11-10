<template>
    <Head title="TheBundProject" />
    <pages-layout :page-title="pageTitle">
        <div class="flex mt-16">
            <div class="mx-auto max-w-screen-xl">
                <div class="mx-auto">
                    <div
                        class="
                            relative
                            grid grid-cols-1
                            lg:grid-cols-2
                            gap-8
                            container
                        "
                    >
                        <div
                            class="
                                absolute
                                hidden
                                w-full
                                h-full
                                lg:flex
                                justify-center
                            "
                        >
                            <div class="w-52 h-52 pb-6 z-40 xl:mt-96 lg:mt-72">
                                <img alt="" src="/images/end/END D.svg" />
                            </div>
                        </div>
                        <div
                            class="
                                grid grid-cols-1
                                bg-accent
                                rounded-lg
                                px-7
                                py-6
                                gap-8
                                sm:gap-3
                                relative
                            "
                            @mouseenter="startFilter = true"
                            @mouseleave="startFilter = false"
                        >
                            <div
                                v-if="startFilter"
                                class="
                                    absolute
                                    h-full
                                    w-full
                                    bg-neutral bg-opacity-40
                                    backdrop-filter backdrop-blur-sm
                                    z-30
                                "
                            >
                                <div
                                    class="
                                        absolute
                                        left-0
                                        bottom-0
                                        text-6xl text-neutral
                                        font-extrabold
                                        ml-8
                                        mb-8
                                    "
                                >
                                    <span>{{ __("The beginning") }}</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <img
                                    alt=""
                                    class="w-7/12"
                                    src="/images/bp/The-Bünd-Project-Imagotipo.svg"
                                />
                                <div class="text-5xl font-extrabold">
                                    <span> 2020 </span>
                                </div>
                            </div>
                            <div class="flex justify-between mx-1 text-sm">
                                <span v-for="letter in __('RESONANCE')">{{
                                    letter
                                }}</span>
                            </div>
                            <div
                                class="
                                    flex
                                    justify-between
                                    mx-1
                                    text-sm text-neutral text-justify
                                    pb-6
                                "
                            >
                                <span>
                                    {{
                                        __("large-texts.about-us.the-beginning")
                                    }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="
                                top-0
                                sm:top-10
                                grid grid-cols-1
                                bg-accent
                                rounded-lg
                                gap-3
                                relative
                            "
                            @mouseenter="missionFilter = true"
                            @mouseleave="missionFilter = false"
                        >
                            <div
                                class="
                                    absolute
                                    h-1/2
                                    bottom-0
                                    w-full
                                    z-30
                                    bg-gradient-to-t
                                    rounded-xl
                                "
                                v-bind:class="{
                                    'from-secondary': missionFilter,
                                    'from-gray-800': !missionFilter,
                                }"
                            >
                                <div
                                    class="
                                        absolute
                                        left-0
                                        bottom-0
                                        text-neutral
                                        ml-16
                                        mb-8
                                        flex flex-col
                                    "
                                >
                                    <span v-if="missionFilter">{{
                                        __("large-texts.about-us.mission")
                                    }}</span>
                                    <span class="text-6xl font-extrabold">{{
                                        __("Mission")
                                    }}</span>
                                </div>
                            </div>
                            <div class="relative">
                                <img
                                    alt=""
                                    class="object-cover w-full rounded-lg"
                                    src="/images/abous_us/Misión.jpg"
                                />
                            </div>
                        </div>
                        <div
                            class="
                                grid grid-cols-1
                                bg-accent
                                rounded-lg
                                gap-3
                                relative
                                md:max-h-[800px] md:max-w-3/4 md:mx-auto
                                lg:ml-32 lg:max-h-[600px] lg:max-w-3/4
                                overflow-hidden
                                mt-20
                                lg:mt-0
                                z-50
                            "
                            @mouseenter="visionFilter = true"
                            @mouseleave="visionFilter = false"
                        >
                            <div
                                :class="{
                                    'from-secondary h-3/4': visionFilter,
                                }"
                                class="
                                    absolute
                                    h-1/2
                                    bottom-0
                                    w-full
                                    z-50
                                    bg-gradient-to-t
                                    from-gray-800
                                    rounded-xl
                                "
                            >
                                <div
                                    class="
                                        absolute
                                        left-0
                                        bottom-0
                                        text-neutral
                                        ml-8
                                        mb-8
                                        flex flex-col
                                    "
                                >
                                    <span v-if="visionFilter">
                                        {{ __("large-texts.about-us.vision") }}
                                    </span>
                                    <span class="text-6xl font-extrabold">{{
                                        __("vision")
                                    }}</span>
                                </div>
                            </div>
                            <div class="relative">
                                <img
                                    alt=""
                                    class="object-cover w-full rounded-lg"
                                    src="/images/abous_us/Visión.jpg"
                                />
                            </div>
                        </div>
                        <div
                            class="
                                top-10
                                sm:top-10
                                grid grid-cols-1
                                bg-accent
                                rounded-lg
                                px-7
                                py-6
                                gap-3
                                relative
                                max-h-[433px]
                            "
                            @mouseenter="newGenerationFilter = true"
                            @mouseleave="newGenerationFilter = false"
                        >
                            <div
                                v-if="newGenerationFilter"
                                class="
                                    absolute
                                    h-full
                                    w-full
                                    bg-neutral bg-opacity-40
                                    backdrop-filter backdrop-blur-sm
                                    z-30
                                "
                            >
                                <div
                                    class="
                                        absolute
                                        left-0
                                        bottom-0
                                        text-6xl text-neutral
                                        font-extrabold
                                        ml-8
                                        mb-8
                                    "
                                >
                                    <span>{{ __("The new generation") }}</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <img
                                    alt=""
                                    class="w-7/12"
                                    src="/images/end/End Logotipo Completo.svg"
                                />
                                <div class="text-5xl font-extrabold">
                                    <span> 2021 </span>
                                </div>
                            </div>
                            <div class="flex justify-between mx-1 text-sm">
                                <span
                                    v-for="letter in __('RENASCENCE')"
                                    class=""
                                    >{{ letter }}</span
                                >
                            </div>
                            <div
                                class="
                                    flex
                                    justify-between
                                    mx-1
                                    text-sm text-neutral text-justify
                                    pb-6
                                "
                            >
                                <span>
                                    {{ __("large-texts.about-us.renascence") }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-20 justify-center items-center gap-2">
            <div>
                <span class="text-secondary text-3xl font-bold uppercase">{{
                    __("Contact us")
                }}</span>
            </div>
            <div class="flex gap-2">
                <a href="mailto: thebund.p@gmail.com">
                    <img
                        class="w-10 bg-primary p-1 rounded-xl cursor-pointer"
                        src="/images/social_networks/Blanco/Mail White.svg"
                    />
                </a>

                <a
                    href="https://www.instagram.com/bund.project/"
                    target="_blank"
                >
                    <img
                        alt=""
                        class="w-10 bg-primary p-1 rounded-xl cursor-pointer"
                        src="/images/social_networks/Blanco/Instagram White.svg"
                    />
                </a>
                <a
                    href="https://www.facebook.com/TheBundProject"
                    target="_blank"
                >
                    <img
                        alt=""
                        class="w-10 bg-primary p-1 rounded-xl cursor-pointer"
                        src="/images/social_networks/Blanco/Facebook White.svg"
                    />
                </a>
            </div>
        </div>
    </pages-layout>
</template>

<script>
import Navbar from "../Components/Public/Navbar";
import Footer from "../Components/Public/Footer";
import Carousel from "../Components/Public/Carousel";
import DesignersCarousel from "../Components/Public/Designers/DesignersCarousel";
import { Head, Link } from "@inertiajs/inertia-vue3";
import PagesLayout from "../Layouts/PagesLayout";

export default {
    name: "AboutUs.vue",
    components: {
        PagesLayout,
        DesignersCarousel,
        Carousel,
        Navbar,
        Head,
        Footer,
    },
    data() {
        return {
            startFilter: false,
            missionFilter: false,
            visionFilter: false,
            newGenerationFilter: false,
            pageTitle: this.__("About us"),
        };
    },
    methods: {},
};
</script>

<style scoped></style>
