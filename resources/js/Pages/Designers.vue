<template>
    <Head title="TheBundProject" />
    <div class="font-sans relative">
        <div class="flex flex-col mx-auto gap-6">
            <!--            <Navbar />-->
            <div class="flex gap-4">
                <div class="w-32 h-32 bg-primary p-4 relative">
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
                        <span>Diseñadores</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center w-full">
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
                        flex
                        gap-3
                        max-w-full
                        overflow-x-scroll
                        scrollbar
                        scrollbar-thumb-primary
                        scrollbar-thumb-rounded-full
                        hover:scrollbar-thumb-accent
                        p-8
                    "
                >
                    <Pill
                        class="
                            cursor-pointer
                            hover:bg-accent
                            transition
                            duration-300
                        "
                        :bg-class="selectedTag === 0 ? 'bg-primary' : undefined"
                        @click="changeDesigners(0)"
                    >
                        <span class="text-neutral font-bold text-2xl mx-28"
                            >Todos</span
                        >
                    </Pill>
                    <PillTag
                        v-for="tag in tags"
                        :selected="selectedTag"
                        :key="tag.id"
                        :tag="tag"
                        v-on:click="changeDesigners($event)"
                    >
                    </PillTag>
                </div>

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
                        "
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
                                :src="getPictureUrl(designer.profile_picture)"
                                alt="Profile image"
                                class="z-0 min-h-full"
                            />
                            <div class="absolute top-2 left-2 z-10">
                                <img
                                    class="w-20 h-20 rounded-3xl"
                                    :src="getPictureUrl(designer.logo_icon)"
                                    alt=""
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
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Pill from "@/Components/Public/Designers/Pill";
import PillTag from "../Components/Public/Designers/PillTag";

export default {
    name: "Designers",
    components: { PillTag, Pill, Head },
    data() {
        return {
            selectedTag: 0,
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
        changeDesigners(id) {
            this.selectedTag = id;
        },
        getPictureUrl(url) {
            return url.startsWith("http") ? url : "storage/" + url;
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
