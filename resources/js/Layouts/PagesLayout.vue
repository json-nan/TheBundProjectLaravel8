<template>
    <BurgerMenuHeader>
        <template v-slot:page-title>{{ pageTitle }}</template>
    </BurgerMenuHeader>
    <slot></slot>
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
