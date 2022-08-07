<template>
   <Layout>
        <Head title="Detail User" />
        <h1>{{ title }}</h1>

        <ul>
            <li>
                <h3>{{ user.name }}</h3>
                <p>Email: <strong>{{ user.name }}</strong></p>
                <p>{{ user.created_at }}</p>
                <Link href="/user/">Kembali</Link>
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
        user: Object
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