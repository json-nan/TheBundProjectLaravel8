<template>
    <nav class="grid grid-cols-4 md:grid-cols-4 z-20 absolute w-full">
        <div class="bg-primary items-center flex p-6">
            <div class="w-4/12 flex justify-center">
                <img
                    src="/images/bp/The-Bünd-Project-Icono.svg"
                    alt="The Bound Project"
                    class="w-12"
                />
            </div>
            <div class="w-1/12 h-full flex justify-center">
                <div class="bg-neutral h-full w-1/12"></div>
            </div>
            <div class="w-7/12 flex justify-center">
                <img
                    src="/images/end/End-Logotipo-Mediano.svg"
                    alt="END"
                    class="w-full"
                />
            </div>
        </div>
        <div class="col-span-2">
            <div class="grid grid-cols-3 h-full text-2xl text-white">
                <div
                    class="flex justify-center items-center hover:bg-secondary duration-300 ease-in-out cursor-pointer">
                    Diseñadores
                </div>
                <div
                    class="flex justify-center items-center hover:bg-secondary duration-300 ease-in-out cursor-pointer">
                    Conócenos
                </div>
                <div
                    class="flex justify-center items-center hover:bg-secondary duration-300 ease-in-out cursor-pointer">
                    Contenido
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 text-neutral text-sm relative">
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
export default {
}
</script>

<style scoped>

</style>
