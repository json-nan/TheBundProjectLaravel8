<template>
    <div class="grid grid-cols-1 sm:grid-cols-7 mt-56 sm:mt-0">
        <div class="col-span-4">
            <img
                :src="getPictureUrl(designer.profile_picture)"
                alt=""
                class="rounded-3xl object-cover h-full"
            />
        </div>
        <div class="flex flex-col col-span-3 gap-4">
            <div class="flex sm:justify-end justify-center px-5 pt-5 gap-2">
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
            <div class="h-52 flex justify-center px-6">
                <img
                    :src="getBrandPictureUrl(designer.brand_picture)"
                    alt=""
                    class="max-w-full h-full"
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
                {{ getDescription() }}
            </div>
            <div class="flex items-center justify-center p-4 w-full">
                <a
                    target="_blank"
                    :href="getPorfolioUrl()"
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
                        <span>{{ __("Portfolio") }}</span>
                    </div>
                </a>
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
            if (!url) {
                return "";
            }
            return url.startsWith("http") ? url : "storage/" + url;
        },
        getBrandPictureUrl(url) {
            return url
                ? url.startsWith("http")
                    ? url
                    : "storage/designers/logos/color/" + url
                : "";
        },
        getDescription() {
            switch (this.$actualLang) {
                case "es":
                    return (
                        this.designer.description ||
                        this.designer.english_description
                    );
                    break;
                case "en":
                    return (
                        this.designer.english_description ||
                        this.designer.description
                    );
                    break;
            }
        },
        getPorfolioUrl() {
            let fileName;
            switch (this.$actualLang) {
                case "es":
                    fileName =
                        this.designer.portfolios.find((p) => p.lang === "es")
                            ?.url ||
                        this.designer.portfolios.find((p) => p.lang === "en")
                            ?.url;
                    break;
                case "en":
                    fileName =
                        this.designer.portfolios.find((p) => p.lang === "en")
                            ?.url ||
                        this.designer.portfolios.find((p) => p.lang === "es")
                            ?.url;
                    break;
            }

            if (!fileName) {
                return "";
            }

            if (fileName.startsWith("http")) {
                return fileName;
            }

            return `/storage/designers/portfolios/${
                fileName.split("_").pop().split(".")[0]
            }/${fileName}`;
        },
    },
    mounted() {
        console.log(this.designer);
    },
};
</script>

<style scoped></style>
