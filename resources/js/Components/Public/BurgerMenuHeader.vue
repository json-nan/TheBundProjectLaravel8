<template>
    <div class="z-50">
        <div class="flex gap-4">
            <div
                class="w-32 h-32 bg-primary p-8 relative"
                @click="isMenuOpen = true"
            >
                <img
                    alt=""
                    class="max-h-full mx-auto"
                    src="/images/bp/The-Bünd-Project-Icono.svg"
                />
                <div class="absolute text-neutral bottom-0 right-1 text-xl">
                    <span>></span>
                </div>
            </div>

            <div class="p-4 flex items-center gap-8">
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
                    <ModalMenuItem v-for="item in menuItems" :item="item" />
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
};
</script>

<style scoped></style>
