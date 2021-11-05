<template>
    <span class="p-2 rounded-full" :class="[bgClass]">
        <slot></slot>
    </span>
</template>

<script>
export default {
    name: "Pill",
    props: {
        tag: {
            type: Object,
            default: () => {},
        },
        bgClass: {
            type: String,
            default: "bg-secondary",
        },
    },
};
</script>

<style scoped></style>
