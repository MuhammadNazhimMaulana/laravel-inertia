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
                <a href="#" @click.prevent="deleteUser">Delete</a>
                <Link :href="`/user/${user.id}/edit`">Edit</Link>
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
    },
    methods:{
        deleteUser() {
            if(confirm('Hapus Data User?'))
            {
                this.$inertia.delete('/user/' + this.user.id)
            }else{
                return false
            }
        }
    }
}
</script>

<style>

</style>