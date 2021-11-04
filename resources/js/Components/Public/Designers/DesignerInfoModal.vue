<template>
    <div class="grid grid-cols-7">
        <div class="col-span-4">
            <img
                :src="getPictureUrl(designer.profile_picture)"
                alt=""
                class="rounded-3xl object-cover h-full"
            />
        </div>
        <div class="flex flex-col col-span-3 gap-4">
            <div class="flex justify-end px-5 pt-5 gap-2">
                <img
                    alt=""
                    class="w-10 bg-secondary p-1 rounded-xl"
                    src="/images/social_networks/Blanco/Instagram White.svg"
                />
                <img
                    alt=""
                    class="w-10 bg-secondary p-1 rounded-xl"
                    src="/images/social_networks/Blanco/Facebook White.svg"
                />
            </div>
            <div class="h-56 flex justify-center px-6">
                <img
                    :src="getPictureUrl(designer.brand_picture)"
                    alt=""
                    class="w-full object-cover h-full"
                />
            </div>
            <div
                class="
                    overflow-y-scroll
                    px-6
                    h-40
                    scrollbar-thin
                    scrollbar-thumb-rounded
                    scrollbar
                    scrollbar-thumb-primary
                    hover:scrollbar-thumb-secondary
                "
            >
                {{ designer.description }} {{ designer.description }}
                {{ designer.description }} {{ designer.description }}
            </div>
            <div class="flex items-center justify-center pb-3 w-full">
                <button
                    class="
                        w-10/12
                        bg-secondary
                        py-2
                        rounded-full
                        text-neutral
                        flex
                        items-center
                        justify-center
                        w-auto
                        gap-4
                    "
                >
                    <div class="flex justify-center items-center text-2xl">
                        <span>Portafolio</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "DesignerInfoModal",
    props: {
        designer: {
            type: Object,
            default: () => {},
        },
    },
    methods: {
        getPictureUrl(url) {
            return url.startsWith("http") ? url : "storage/" + url;
        },
    },
};
</script>

<style scoped></style>
