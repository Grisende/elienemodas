<script setup>

defineProps({
    title: String
});

</script>

<template>
    <div class="mt-7 pb-3 border-b border-dashed">
        <p class="text-md text-gray-600">
            {{title}}
        </p>
    </div>
</template>
