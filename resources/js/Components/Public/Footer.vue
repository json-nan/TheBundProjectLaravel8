<template>
    <footer class="footer-1 bg-primary p-12 text-neutral mt-8">
        <div class="container mx-auto grid sm:grid-cols-2 gap-8">
            <div class="flex flex-col gap-4">
                <div>
                    <img
                        alt=""
                        class="w-full sm:w-4/12"
                        src="images/bp/The-Bünd-Project-Imagotipo.svg"
                    />
                </div>
                <div class="text-lg sm:text-sm flex content-center">
                    <div>
                        {{ __("large-texts.footer.description") }}
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <div class="text-lg">{{ __("Sponsors") }}</div>
                    <div class="flex flex-row mt-2">
                        <img
                            alt=""
                            class="w-36 mr-10"
                            src="/images/sponsors/Coyote.svg"
                        />
                        <img
                            alt=""
                            class="w-36"
                            src="/images/sponsors/Cuadro Menguante.svg"
                        />
                    </div>
                </div>
                <div class="flex justify-start sm:justify-end gap-6 mt-10 mb-5">
                    <div>{{ __("Follow us") }}</div>
                    <div class="grid grid-cols-3 lg:flex lg:flex-row mt-2">
                        <img
                            alt="Instagram"
                            class="w-12 mr-3"
                            src="/images/social_networks/Blanco/Instagram White.svg"
                        />
                        <img
                            alt="Facebook"
                            class="w-12 mr-3"
                            src="/images/social_networks/Blanco/Facebook White.svg"
                        />
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer",
};
</script>

<style scoped></style>
