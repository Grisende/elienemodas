<script setup>
    defineProps({
        deleteRoute: {
            type: String
        },
        id: {
            type: Number
        }
    })
</script>

<template>
    <a :href="route(deleteRoute, {id})" class="text-gray-50 bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Excluir</a>
</template>
