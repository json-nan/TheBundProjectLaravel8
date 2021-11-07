<template>
    <teleport to="body">
        <transition leave-active-class="duration-200">
            <div
                v-show="show"
                class="fixed inset-0 overflow-y-auto z-50 flex"
                scroll-region
            >
                <transition
                    enter-from-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="ease-in duration-200"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                >
                    <div
                        v-show="show"
                        class="fixed inset-0 transform transition-all"
                        @click="close"
                    >
                        <div
                            class="
                                bg-primary bg-opacity-40
                                backdrop-filter
                                absolute
                                inset-0
                                backdrop-blur
                            "
                        ></div>
                    </div>
                </transition>

                <div
                    v-show="show"
                    :class="maxWidthClass"
                    class="
                        bg-primary
                        overflow-visible
                        shadow-xl
                        transform
                        transition-all
                        relative
                    "
                >
                    <slot v-if="show"></slot>
                </div>
            </div>
        </transition>
    </teleport>
</template>

<script>
import { defineComponent, onMounted, onUnmounted } from "vue";

export default defineComponent({
    emits: ["close"],

    props: {
        show: {
            default: false,
        },
        maxWidth: {
            default: "2xl",
        },
        closeable: {
            default: true,
        },
    },

    watch: {
        show: {
            immediate: true,
            handler: (show) => {
                if (show) {
                    document.body.style.overflow = "hidden";
                } else {
                    document.body.style.overflow = null;
                }
            },
        },
    },

    setup(props, { emit }) {
        const close = () => {
            if (props.closeable) {
                emit("close");
            }
        };

        const closeOnEscape = (e) => {
            if (e.key === "Escape" && props.show) {
                close();
            }
        };

        onMounted(() => document.addEventListener("keydown", closeOnEscape));
        onUnmounted(() => {
            document.removeEventListener("keydown", closeOnEscape);
            document.body.style.overflow = null;
        });

        return {
            close,
        };
    },

    computed: {
        maxWidthClass() {
            return {
                sm: "sm:max-w-sm",
                md: "sm:max-w-md",
                lg: "sm:max-w-lg",
                xl: "sm:max-w-xl",
                "2xl": "sm:max-w-2xl",
                "3xl": "sm:max-w-3xl",
                "4xl": "sm:max-w-4xl",
            }[this.maxWidth];
        },
    },
});
</script>
