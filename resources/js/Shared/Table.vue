<script setup>
    import {toNumber} from "@vue/shared";
    import EditButton from "../Components/EditButton.vue";
    import DeleteButton from "../Components/DeleteButton.vue";

    defineProps({
        fields: {
            type: Object
        },
        objects: {
            type: Object,
            default: {}
        },
        indexes: {
            type: Object,
            default: {}
        },
        getRoute : {
            type: String
        },
        editRoute: {
            type: String
        },
        deleteRoute: {
            type: String
        },
        page: {
            type: Number,
            default: 1
        },
        count: {
            type: Number,
            default: 0
        }
    })
</script>


<template>

    <div class="relative overflow-x-auto mt-[3em] shadow-md sm:rounded-lg text-center items-center">
        <table class="w-[78em] text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-600 uppercase bg-gray-50">
            <tr class="text-center items-center">
                <th v-for="field in fields" scope="col" class="px-6 py-3">
                    {{ field }}
                </th>

                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="value in objects" class="bg-white border-b text-center items-center odd:bg-white even:bg-gray-50">
                    <td v-for="index in indexes" class="px-6 py-4">
                        {{ value[index] }}
                    </td>
                    <td>
                        <EditButton :edit-route="editRoute" :id="value.id" class="mr-[2em]"/>
                        <DeleteButton :delete-route="deleteRoute" :id="value.id" />
                    </td>
                </tr>
            </tbody>
        </table>
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between p-4" aria-label="Table navigation">
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li v-if="page !== 1">
                    <a :href="route(getRoute)" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a aria-disabled aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ page }}</a>
                </li>
                <li v-if="(count/5 >= page+1)">
                    <a :href="route(getRoute, {page: page+1})" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ toNumber(page) + 1 }}</a>
                </li>
                <li v-if="(count/5 >= page+2)">
                    <a :href="route(getRoute, {page: page+2})" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ toNumber(page) + 2 }}</a>
                </li>
                <li>
                    <a :href="route(getRoute, {page: page+1})" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>

</template>
