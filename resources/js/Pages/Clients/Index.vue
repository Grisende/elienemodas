<script setup>
import Layout from "../../Shared/Layout.vue";
import { Head } from "@inertiajs/vue3";
import Header from "../../Shared/Header.vue";
import Title from "../../Shared/Title.vue";
import Table from "../../Shared/Table.vue";

defineProps({
    title: {
        type: String
    },
    fields: {
        type: Object
    },
    objects: {
        type: Object
    },
    indexes: {
        type: Object
    },
    getRoute: {
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
});

</script>


<template>

    <Head title="Clientes"/>
    <Layout/>
    <Header/>

    <div class="p-4 sm:ml-56">
        <Title :title="title"/>
        <Table
            :fields="fields"
            :objects="objects"
            :indexes="indexes"
            :get-route="getRoute"
            :edit-route="editRoute"
            :delete-route="deleteRoute"
            :page="page"
            :count="count"
        />
    </div>

</template>
