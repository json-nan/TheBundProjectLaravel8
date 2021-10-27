<template>

</template>

<script>
import {SwiperSlide} from "swiper/vue";
import "swiper/css";

export default {
    name: "DesignerSlide",
    components: {
        SwiperSlide,
    },
    props: {
        designer: {
            type: Object,
            default: () => {
            },
        },
    },
    mounted() {
        // console.log(this.designer);
    },
    methods: {},
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 100px 60px rgba(0, 0, 0, 0.6);
}
</style>
