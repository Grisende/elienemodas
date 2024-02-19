<script setup>
    import Layout from "../../Shared/Layout.vue";
    import { Head } from "@inertiajs/vue3";
    import Header from "../../Shared/Header.vue";
    import Title from "../../Shared/Title.vue";

    defineProps({
        bills: {
            type: String,
            default: 0
        },
        sales: {
            type: String,
            default: 0
        },
        debits: {
            type: String,
            default: 0
        },
        title: {
            type: String
        }
    })

    function formatPrice(value) {
        let val = (value / 1).toFixed(2).replace('.', ',')
        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
    }
</script>

<template>
    <Head title="Dashboard"/>
    <Layout/>
    <Header/>

    <div class="p-4 sm:ml-56">
        <Title :title=title />
        <div class="p-4">
            <div class="grid grid-cols-3 gap-16 mt-[3em]">
                <div class="h-36 rounded-xl bg-gray-50">
                    <p class="mt-8 flex items-center justify-center text-xs text-gray-600">
                        CONTAS A PAGAR MÊS ATUAL
                    </p>
                    <p class="mt-8 flex items-center justify-center text-3xl text-gray-600">
                        R$ {{ formatPrice(bills) }}
                    </p>
                </div>
                <div class="h-36 rounded-xl bg-gray-50">
                    <p class="mt-8 flex items-center justify-center text-xs text-gray-600">
                        VENDAS MÊS ATUAL
                    </p>
                    <p class="mt-8 flex items-center justify-center text-3xl text-gray-600">
                        R$ {{ formatPrice(sales) }}
                    </p>
                </div>
                <div class="h-36 rounded-xl bg-gray-50">
                    <p class="mt-8 flex items-center justify-center text-xs text-gray-600">
                        DÉBITOS DE CLIENTES MÊS ATUAL
                    </p>
                    <p class="mt-8 flex items-center justify-center text-3xl text-gray-600">
                        R$ {{ formatPrice(debits) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
