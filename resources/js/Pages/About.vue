<template>
   <Layout>
        <Head title="About" />
        <h1 v-text="title"></h1>
   </Layout>
</template>

<style>

</style>

<script>
import Layout from '../Shared/Layout.vue'

// Import Component
import { Head } from '@inertiajs/inertia-vue'

export default {
    props: ['title'],
    components: {
        Head,
        Layout,
    }
}
</script>
