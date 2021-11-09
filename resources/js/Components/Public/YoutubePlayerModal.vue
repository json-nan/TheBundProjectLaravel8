<template>
    <iframe
        :src="`https://www.youtube.com/embed/${videoId}`"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        frameborder="1"
        :height="height"
        :title="title"
        class="w-full"
    ></iframe>
</template>

<script>
export default {
    name: "YoutubePlayerModal",
    props: {
        src: {
            type: String,
            default: "https://www.youtube.com/watch?v=dQw4w9WgXcQ",
        },
        height: {
            type: Number,
            default: 600,
        },
        title: {
            type: String,
            default: "YouTube video player",
        },
    },
    computed: {
        videoId() {
            return this.src.split("/").pop().split("=").pop();
        },
    },
};
</script>

<style scoped></style>
