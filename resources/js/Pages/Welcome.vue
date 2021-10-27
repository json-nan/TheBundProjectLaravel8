<template>
    <Head title="TheBundProject"/>

    <div class="font-sans overflow-hidden relative">
        <div class="absolute -top-16 -right-16 w-72 z-20 overflow-x-hidden">
            <img class="" src="/images/end/Sello.svg" alt=""/>
        </div>
        <div class="flex flex-col mx-auto gap-6">
            <Navbar/>
            <Carousel/>
            <DesignersCarousel :designers="designers"></DesignersCarousel>
                        <Footer />
        </div>
    </div>

</template>

<script>
import {defineComponent} from 'vue'
import {Head, Link} from '@inertiajs/inertia-vue3';
import 'swiper/css';
import Navbar from "../Components/Public/Navbar";
import Carousel from "../Components/Public/Carousel";
import Footer from "../Components/Public/Footer";
import DesignersCarousel from "../Components/Public/Designers/DesignersCarousel";

export default defineComponent({
    components: {
        Navbar,
        Head,
        Link,
        DesignersCarousel,
        Carousel,
        Footer
    },

    props: {
        designers: Array
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
        };
    },
})
</script>
