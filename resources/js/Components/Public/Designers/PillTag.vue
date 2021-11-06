<template>
    <Pill
        @click="$emit('click', tag.id)"
        class="
            cursor-pointer
            hover:bg-accent
            transition
            duration-300
            flex-shrink-0
        "
        :bg-class="selected === tag.id ? 'bg-primary' : undefined"
    >
        <span class="text-neutral font-bold text-2xl mx-20 my-10">{{
            tag.name
        }}</span>
    </Pill>
</template>

<script>
import Pill from "./Pill";

export default {
    name: "PillTag",
    components: { Pill },
    props: {
        tag: {
            type: Object,
            default: () => {},
        },
        selected: {
            type: Number,
            default: 0,
        },
    },
    emits: ["click"],
};
</script>

<style scoped></style>
