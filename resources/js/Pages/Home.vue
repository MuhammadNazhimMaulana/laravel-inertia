<template>
   <Layout>
        <Head title="Home" />
        <h1>Halo {{ title }}</h1>
   </Layout>
</template>

<style>

</style>

<script>
import Layout from '../Shared/Layout.vue'

// Import Component
import { Link, Head } from '@inertiajs/inertia-vue'

export default {
    props: ['title'],
    components: {
        Link,
        Head,
        Layout,
    }
}
</script>