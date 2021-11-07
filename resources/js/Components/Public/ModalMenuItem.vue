<template>
    <Link
        :href="item.url || item.submenu[0].url"
        as="button"
        class="
            w-full
            py-5
            px-16
            group
            hover:bg-accent
            transition
            duration-300
            flex flex-col
            justify-end
            items-center
            gap-4
        "
        type="button"
    >
        <div class="flex gap-4">
            <span>{{ item.label }}</span>
            <span
                v-if="item.submenu?.length"
                class="
                    right-2
                    text-accent
                    group-hover:text-secondary
                    transition
                    duration-300
                "
            >
                <svg
                    fill="currentColor"
                    height="20"
                    viewBox="0 0 24 24"
                    width="20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M21 12l-18 12v-24z" />
                </svg>
            </span>
        </div>
    </Link>
</template>

<script>
import InlineSvg from "vue-inline-svg";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: { Link, InlineSvg },
    name: "ModalMenuItem",
    props: {
        item: {
            type: Object,
            default: () => {},
        },
    },
};
</script>

<style scoped></style>
