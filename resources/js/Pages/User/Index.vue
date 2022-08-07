<template>
    <Layout>
        <Head title="List User" />
        <h1>{{ title }}</h1>

        <ul>
            <li v-for="user in users" :key="user">
                <p>{{user.name }}</p>
                <Link :href="`/user/${ user.id }`">Detail</Link>
            </li>
        </ul>
    </Layout>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue'
import Layout from '../../Shared/Layout.vue'

export default {
    props: {
        title: String,
        users: Array
    },
    components:{
        Link,
        Head,
        Layout
    }
}
</script>

<style>

</style>