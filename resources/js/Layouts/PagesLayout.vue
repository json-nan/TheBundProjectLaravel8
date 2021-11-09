<template>
    <BurgerMenuHeader>
        <template v-slot:page-title>{{ pageTitle }}</template>
    </BurgerMenuHeader>
    <div
        class="
            hidden
            sm:flex
            absolute
            -top-16
            -right-16
            w-72
            h-72
            z-0
            overflow-x-hidden
            animate-spin-slow
        "
    >
        <img
            alt="Evolving new design"
            src="/images/end/Sello con opacidad.svg"
        />
    </div>
    <div>
        <slot></slot>
    </div>
    <Footer></Footer>
</template>

<script>
import Footer from "../Components/Public/Footer";
import BurgerMenuHeader from "../Components/Public/BurgerMenuHeader";

export default {
    name: "PagesLayout",
    components: { BurgerMenuHeader, Footer },
    props: {
        pageTitle: {
            type: String,
            default: "",
        },
    },
};
</script>

<style scoped></style>
