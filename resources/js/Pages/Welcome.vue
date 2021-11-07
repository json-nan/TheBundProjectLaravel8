<template>
    <Head title="TheBundProject" />

    <div class="font-sans overflow-hidden relative">
        <div
            class="
                hidden
                sm:flex
                absolute
                -top-16
                -right-16
                w-72
                z-0
                sm:z-10
                overflow-x-hidden
            "
        >
            <img
                alt="Evolving new design"
                class=""
                src="/images/end/Sello Blanco.svg"
            />
        </div>
        <div class="flex flex-col mx-auto sm:gap-6">
            <Navbar />
            <BurgerMenuHeader
                class="visible lg:hidden inline sm:absolute"
                :showTitle="false"
            >
                <template v-slot:page-title>Inicio</template>
            </BurgerMenuHeader>
            <Carousel />
            <DesignersCarousel :designers="designers"></DesignersCarousel>
            <Footer />
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import "swiper/css";
import Navbar from "../Components/Public/Navbar";
import Carousel from "../Components/Public/Carousel";
import Footer from "../Components/Public/Footer";
import DesignersCarousel from "../Components/Public/Designers/DesignersCarousel";
import ModalMenu from "../Components/Public/ModalMenu";
import BurgerMenuHeader from "../Components/Public/BurgerMenuHeader";

export default defineComponent({
    components: {
        BurgerMenuHeader,
        ModalMenu,
        Navbar,
        Head,
        Link,
        DesignersCarousel,
        Carousel,
        Footer,
    },

    props: {
        designers: Array,
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
        };
    },
});
</script>
