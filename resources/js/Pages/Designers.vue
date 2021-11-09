<template>
    <Head title="TheBundProject" />
    <modal
        :show="showDesignerModal"
        maxWidth="3xl"
        @close="toggleDesignerModal(false)"
    >
        <designer-info-modal :designer="selectedDesigner"></designer-info-modal>
    </modal>
    <pages-layout :page-title="pageTitle">
        <div class="font-sans relative">
            <div class="flex flex-col mx-auto gap-6">
                <!--            <Navbar />-->
            </div>
            <div class="flex justify-center items-center w-full flex-col">
                <div
                    class="
                        max-w-full
                        overflow-x-scroll
                        scrollbar
                        scrollbar-thumb-primary
                        scrollbar-thumb-rounded-full
                        hover:scrollbar-thumb-accent
                        py-8
                        flex
                        gap-3
                    "
                >
                    <Pill
                        :bg-class="selectedTag === 0 ? 'bg-primary' : undefined"
                        class="
                            cursor-pointer
                            hover:bg-accent
                            transition
                            duration-300
                            flex-shrink-0
                        "
                        @click="changeDesigners(0)"
                    >
                        <span class="text-neutral font-bold text-2xl mx-28">{{
                            __("All")
                        }}</span>
                    </Pill>
                    <PillTag
                        v-for="tag in tags"
                        :key="tag.id"
                        :selected="selectedTag"
                        :tag="tag"
                        v-on:click="changeDesigners($event)"
                    >
                    </PillTag>
                </div>
                <div
                    class="
                        flex
                        gap-3
                        container
                        flex-col
                        items-center
                        justify-center
                    "
                >
                    <div></div>
                    <div></div>

                    <div
                        class="
                            grid grid-cols-1
                            sm:grid-cols-2
                            xl:grid-cols-3
                            gap-8
                            auto-rows-fr
                        "
                    >
                        <div
                            v-for="designer in designersToShow"
                            class="
                                2xl:h-100 2xl:w-100
                                xl:h-96 xl:w-96
                                lg:h-96 lg:w-96
                                sm:h-72 sm:w-72
                                h-96
                                w-96
                                cursor-pointer
                            "
                            @click="toggleDesignerModal(true, designer)"
                        >
                            <div
                                class="
                                    flex
                                    justify-center
                                    items-center
                                    relative
                                    rounded-xl
                                    overflow-hidden
                                    h-full
                                "
                            >
                                <img
                                    :src="
                                        getPictureUrl(
                                            designer.products_picture ||
                                                designer.profile_picture
                                        )
                                    "
                                    alt="Profile image"
                                    class="z-0 min-h-full"
                                />
                                <div class="absolute top-2 left-2 z-10">
                                    <img
                                        :src="getIconBNUrl(designer.logo_icon)"
                                        alt=""
                                        class="w-20 h-20 rounded-2xl"
                                    />
                                </div>

                                <div
                                    class="
                                        absolute
                                        bg-gradient-to-t
                                        from-black
                                        min-w-full min-h-full
                                        z-10
                                    "
                                ></div>
                                <div
                                    class="
                                        absolute
                                        text-neutral
                                        left-0
                                        bottom-0
                                        font-sans font-bold
                                        z-10
                                        flex flex-col
                                        p-6
                                    "
                                >
                                    <span class="text-5xl">
                                        {{ designer.brand_name }}</span
                                    >
                                    <span class="text-2xl">
                                        {{ designer.name }}</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </pages-layout>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Pill from "@/Components/Public/Designers/Pill";
import PillTag from "../Components/Public/Designers/PillTag";
import Footer from "../Components/Public/Footer";
import PagesLayout from "../Layouts/PagesLayout";
import Modal from "../Jetstream/Modal";
import DesignerInfoModal from "../Components/Public/Designers/DesignerInfoModal";

export default {
    name: "Designers",
    components: {
        DesignerInfoModal,
        Modal,
        Footer,
        PillTag,
        Pill,
        Head,
        PagesLayout,
    },
    data() {
        return {
            selectedTag: 0,
            pageTitle: this.__("Designers"),
            showDesignerModal: false,
        };
    },

    computed: {
        designersToShow() {
            if (this.selectedTag === 0) {
                return this.designers;
            }
            return this.designers.filter((designer) =>
                designer.tags.map((tag) => tag.id).includes(this.selectedTag)
            );
        },
    },
    props: {
        designers: {
            type: Array,
            default: () => [],
        },
        tags: {
            type: Array,
            default: () => [],
        },
        years: {
            type: Array,
            default: () => [],
        },
    },
    methods: {
        toggleDesignerModal(show, designer = {}) {
            this.selectedDesigner = designer;
            this.showDesignerModal = show;
        },
        changeDesigners(id) {
            this.selectedTag = id;
        },
        getPictureUrl(url) {
            return url ? (url.startsWith("http") ? url : "storage/" + url) : "";
        },
        getIconBNUrl(url) {
            return url
                ? url.startsWith("http")
                    ? url
                    : "storage/designers/logos/BN/" + url
                : "";
        },
    },

    mounted() {
        console.table(this.designers);
    },
};
</script>

<style scoped>
.profile-filter {
    box-shadow: inset 0 0 130px 120px rgba(0, 0, 0, 0.6);
}
</style>
