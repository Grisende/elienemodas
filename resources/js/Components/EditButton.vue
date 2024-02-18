<script setup>
    defineProps({
        editRoute: {
            type: String
        },
        id: {
            type: Number
        }
    })
</script>

<template>
    <a :href="route(editRoute, {id})" class="text-gray-600 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Editar</a>
</template>
