<template>
    <div class="z-50">
        <div class="flex gap-4">
            <div
                class="
                    w-full
                    sm:w-32 sm:h-32
                    bg-primary
                    p-8
                    relative
                    flex flex-row
                    items-left
                "
                @click="isMenuOpen = true"
            >
                <div class="flex text-neutral text-xl items-left">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="35"
                        height="35"
                        viewBox="0 0 50 50"
                        style="fill: #fff"
                    >
                        <path
                            d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z"
                        ></path>
                    </svg>
                </div>
                <img
                    alt=""
                    class="h-12 sm:max-h-full mx-auto"
                    src="/images/bp/The-Bünd-Project-Icono.svg"
                />
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
    data: () => {
        return {
            isMenuOpen: false,
            menuItems: [
                {
                    label: "Inicio",
                    url: "/",
                },
                {
                    label: "Diseñadores",
                    url: "/designers",
                },
                {
                    label: "Conócenos",
                    url: "/about-us",
                },
                {
                    label: "Podcasts",
                    url: "/podcasts",
                },
                {
                    label: "Workshops",
                    url: "/workshops",
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
