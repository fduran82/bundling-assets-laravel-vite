<template>
    <div class="vueText">
        This is an Example Vue 3 SFC!!...{{ name }}
    </div>
</template>

<script setup>
    import { onMounted } from 'vue';

    const props = defineProps(['name'])

    onMounted(()=> {
        console.log('Mounted Vue 3 SFC')
    })
</script>

<style scoped>
    .vueText {
        color: white;
        padding-top: 20px;
    }

</style>
