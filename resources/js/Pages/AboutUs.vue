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
                                xl:mt-96
                                lg:mt-72
                            "
                        >
                            <div class="w-52 h-52 pb-6 z-40">
                                <img src="/images/end/END D.svg" alt="" />
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
                                    <span>El inicio</span>
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
                                <span class="">R</span>
                                <span class="">E</span>
                                <span class="">S</span>
                                <span class="">O</span>
                                <span class="">N</span>
                                <span class="">A</span>
                                <span class="">N</span>
                                <span class="">C</span>
                                <span class="">I</span>
                                <span class="">A</span>
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
                                <span
                                    >Somos diseñadores apasionados por la
                                    innovación y la incorporación de nuevas
                                    tecnologías en nuestros productos que ayuden
                                    a mejorar la experiencia del usuario y que
                                    además, sean productos visualmente
                                    atractivos. Somos resonancia porque hacemos
                                    que nuestros productos logren más de lo que
                                    se proponen: nos ayudamos mutuamente en
                                    diferentes areas del diseño y eso nos hace
                                    únicos.
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
                                v-bind:class="{
                                    'from-secondary': missionFilter,
                                    'from-gray-800': !missionFilter,
                                }"
                                class="
                                    absolute
                                    h-1/2
                                    bottom-0
                                    w-full
                                    z-30
                                    bg-gradient-to-t
                                    rounded-xl
                                "
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
                                    <span v-if="missionFilter"
                                        >Motivar e inspirar a los Diseñadores
                                        industriales a abrir nuevos
                                        caminos</span
                                    >
                                    <span class="text-6xl font-extrabold"
                                        >Misión</span
                                    >
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
                                    <span v-if="visionFilter"
                                        >“Ser el referente de Diseño Industrial
                                        regionalmente</span
                                    >
                                    <span class="text-6xl font-extrabold"
                                        >Visión</span
                                    >
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
                                    <span>La nueva generación</span>
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
                                <span class="">R</span>
                                <span class="">E</span>
                                <span class="">N</span>
                                <span class="">A</span>
                                <span class="">C</span>
                                <span class="">I</span>
                                <span class="">M</span>
                                <span class="">I</span>
                                <span class="">E</span>
                                <span class="">N</span>
                                <span class="">T</span>
                                <span class="">O</span>
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
                                <span
                                    >Somos END, la generación que marca un antes
                                    y un después en la transición a una nueva
                                    etapa en la que compartimos parte de nuestra
                                    creatividad con la comunidad. Presentamos
                                    ideas revolucionarias, cambiamos el concepto
                                    del diseño industrial en el país y
                                    posicionamos la profesión del diseñador
                                    industrial como un referente más allá de las
                                    fronteras.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-20 justify-center items-center gap-2">
            <div>
                <span class="text-secondary text-3xl font-bold"
                    >CONTÁCTANOS</span
                >
            </div>
            <div class="flex gap-2">
                <img
                    class="w-10 bg-primary p-1 rounded-xl cursor-pointer"
                    src="/images/social_networks/Blanco/Mail White.svg"
                />
                <img
                    alt=""
                    class="w-10 bg-primary p-1 rounded-xl cursor-pointer"
                    src="/images/social_networks/Blanco/Instagram white.svg"
                />
                <img
                    alt=""
                    class="w-10 bg-primary p-1 rounded-xl cursor-pointer"
                    src="/images/social_networks/Blanco/Facebook White.svg"
                />
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
            pageTitle: "Quiénes sómos",
        };
    },
    methods: {},
};
</script>

<style scoped></style>
