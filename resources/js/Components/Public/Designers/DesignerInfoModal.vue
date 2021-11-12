<template>
    <div class="grid grid-cols-1 sm:grid-cols-7 mt-56 sm:mt-0 relative">
        <div class="col-span-4 relative">
            <img
                :src="getPictureUrl(designer.profile_picture)"
                alt=""
                class="rounded-3xl object-cover h-full"
            />
            <div class="absolute z-40 flex flex-col bottom-0 left-0 p-6">
                <span class="text-neutral text-5xl font-bold">{{
                    designer.name
                }}</span>
                <span class="text-neutral text-3xl">{{
                    designer.brand_name
                }}</span>
            </div>
        </div>

        <div class="flex flex-col col-span-3 gap-4">
            <div class="flex sm:justify-end justify-center px-5 pt-5 gap-2">
                <a
                    v-for="socialNetwork in designer.social_networks"
                    :href="
                        socialNetwork.slug === 'email'
                            ? 'mailto: ' + socialNetwork.pivot.url
                            : socialNetwork.pivot.url
                    "
                    target="_blank"
                >
                    <img
                        :src="getIconUrl(socialNetwork.slug)"
                        alt="Social Network"
                        class="w-10 h-10 bg-secondary p-1 rounded-lg"
                    />
                </a>
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
                    target="_blank"
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
        getIconUrl(socialNetwork) {
            switch (socialNetwork) {
                case "facebook":
                    return "/images/social_networks/Blanco/Facebook White.svg";
                    break;
                case "instagram":
                    return "/images/social_networks/Blanco/Instagram White.svg";
                    break;
                case "behance":
                    return "/images/social_networks/Blanco/Behance White.svg";
                    break;
                case "twitter":
                    return "/images/social_networks/Blanco/Twitter White.svg";
                    break;
                case "linkedin":
                    return "/images/social_networks/Blanco/Linkedin White.svg";
                    break;
                case "email":
                    return "/images/social_networks/Blanco/Mail White.svg";
                    break;
                default:
                    return "/images/others/Flecha.svg";
                    break;
            }
        },
    },
    mounted() {
        console.log(this.designer);
    },
};
</script>

<style scoped></style>
