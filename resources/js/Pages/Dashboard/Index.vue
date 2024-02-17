<script setup>
import Layout from "../../Shared/Layout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    bills: String,
    sales: String,
    debits: String
})

function formatPrice(value) {
    let val = (value/1).toFixed(2).replace('.', ',')
    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
}

</script>

<template>
    <Head title="Dashboard"/>
    <Layout/>
    <div class="bg-gray-50 h-20 border border-dashed"/>

    <div class="p-4 sm:ml-56">
        <div class="mt-7 pb-3 border-b border-dashed">
            <p class="text-x7 text-gray-600">
                DASHBOARD
            </p>
        </div>
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

