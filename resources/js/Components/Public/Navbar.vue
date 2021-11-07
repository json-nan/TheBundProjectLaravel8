<template>
    <nav class="hidden container lg:grid lg:grid-cols-5 z-20 absolute">
        <div class="bg-primary justify-center items-center flex p-8">
            <div class="flex justify-center">
                <img
                    alt="The Bound Project X End"
                    class="w-full"
                    src="/images/others/BPXEND.svg"
                />
            </div>
        </div>
        <div class="col-span-3">
            <div
                class="
                    grid grid-cols-4
                    h-full
                    lg:text-xl
                    xl:text-2xl
                    text-white
                "
            >
                <Link
                    as="button"
                    class="
                        flex
                        justify-center
                        items-center
                        hover:bg-secondary
                        duration-300
                        ease-in-out
                    "
                    href="/designers"
                    type="button"
                    >Diseñadores
                </Link>

                <Link
                    as="button"
                    class="
                        flex
                        justify-center
                        items-center
                        hover:bg-secondary
                        duration-300
                        ease-in-out
                    "
                    href="/about-us"
                    type="button"
                    >Conócenos
                </Link>

                <Link
                    as="button"
                    class="
                        flex
                        justify-center
                        items-center
                        hover:bg-secondary
                        duration-300
                        ease-in-out
                    "
                    href="/podcasts"
                    type="button"
                    >Podcasts
                </Link>
                <Link
                    as="button"
                    class="
                        flex
                        justify-center
                        items-center
                        hover:bg-secondary
                        duration-300
                        ease-in-out
                    "
                    href="/workshops"
                    type="button"
                    >Workshops
                </Link>
            </div>
        </div>
        <div
            class="
                flex
                gap-6
                px-3
                lg:justify-start
                xl:justify-center
                2xl:justify-end
                text-neutral text-sm
                relative
                xl:col-start-5
            "
        >
            <div class="flex justify-center items-center">
                <span class="bg-neutral bg-opacity-30 px-3 py-0.5 rounded-full"
                    >Esp</span
                >
            </div>
            <div class="flex justify-center items-center">
                <span class="bg-neutral bg-opacity-30 px-3 py-0.5 rounded-full"
                    >Eng</span
                >
            </div>
        </div>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>

<style scoped></style>
