<template>
    <div class="z-50">
        <div class="flex gap-4">
            <div
                class="
                    w-full
                    sm:w-32 sm:h-32
                    bg-primary
                    sm:p-6
                    relative
                    flex flex-row
                    items-center
                    relative
                    cursor-pointer
                    justify-center
                "
                @click="isMenuOpen = true"
            >
                <img
                    alt=""
                    class="h-12 sm:h-auto sm:max-h-full mx-auto"
                    src="/images/bp/The-Bünd-Project-Icono.svg"
                />
                <div
                    class="
                        text-neutral text-xl
                        absolute
                        bottom-3
                        right-3
                        sm:bottom-3 sm:right-3
                    "
                >
                    <svg
                        style="fill: #fff"
                        height="15"
                        viewBox="0 0 24 24"
                        width="15"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M21 12l-18 12v-24z" />
                    </svg>
                </div>
            </div>

            <div class="p-4 flex items-center gap-8" v-if="showTitle">
                <div class="bg-secondary w-6 h-6"></div>
                <div class="text-primary text-4xl font-extrabold">
                    <span><slot name="page-title"></slot></span>
                </div>
            </div>
        </div>
        <ModalMenu
            :show="isMenuOpen"
            @close="isMenuOpen = false"
            id="modalMenu"
        >
            <div
                class="
                    text-neutral
                    flex flex-col
                    justify-between
                    h-full
                    items-end
                    py-5
                "
            >
                <div class="p-16 w-full">
                    <img
                        alt=""
                        class="max-h-full mx-auto"
                        src="/images/bp/The-Bünd-Project-Icono.svg"
                    />
                </div>
                <div>
                    <ModalMenuItem
                        v-for="item in menuItems"
                        :item="item"
                        :key="item.url"
                    />
                </div>
            </div>
        </ModalMenu>
    </div>
</template>

<script>
import Modal from "../../Jetstream/Modal";
import ModalMenu from "./ModalMenu";
import ModalMenuItem from "./ModalMenuItem";

export default {
    name: "BurgerMenuHeader",
    components: { ModalMenuItem, ModalMenu, Modal },
    data() {
        return {
            isMenuOpen: false,
            menuItems: [
                {
                    label: this.__("Homepage"),
                    url: "/",
                },
                {
                    label: this.__("Designers"),
                    url: "/designers",
                },
                {
                    label: this.__("About us"),
                    url: "/about-us",
                },
                {
                    label: this.__("Podcasts"),
                    url: "/podcasts",
                },
                {
                    label: this.__("Handrooms"),
                    url: "/rooms",
                },
            ],
        };
    },
    props: {
        showTitle: {
            type: Boolean,
            default: true,
        },
    },
};
</script>

<style scoped></style>
