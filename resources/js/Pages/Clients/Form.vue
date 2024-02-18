<script setup>
import { Head } from "@inertiajs/vue3";
import Layout from "../../Shared/Layout.vue";
import Header from "../../Shared/Header.vue";
import Title from "../../Shared/Title.vue";

defineProps({
    title: {
        type: String
    },
    buttonName: {
        type: String
    }
})

</script>

<template>

    <Head title="Clientes"/>
    <Layout/>
    <Header/>

    <div class="p-4 sm:ml-56">
        <Title :title="title"/>
        <form class="max-w-md mx-auto mt-[5em]">
            <div class="relative z-0 w-full mb-5 group">
                <input name="client_name" id="client_name" class="block py-2.5 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-grey-600 peer" placeholder=" " required />
                <label for="client_name" class="peer-focus:font-medium absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-grey-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NOME</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input name="client_phone" id="clent_phone" class="block py-2.5 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-grey-600 peer" placeholder=" " required />
                <label for="client_phone" class="peer-focus:font-medium absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-grey-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">TELEFONE</label>
            </div>

            <button type="button" class="text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2">
                {{ buttonName }}
            </button>
        </form>
    </div>
</template>
