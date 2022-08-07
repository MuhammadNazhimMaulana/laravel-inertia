<template>
   <Layout>
        <Head v-bind:title="title" />

        <!-- Form For User -->
        <form @submit.prevent="create">
            <div class="form-group">
                <label>Name</label>
                <input type="text" v-model="user.name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" v-model="user.email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" v-model="user.password">
            </div>

            <button type="submit">Register</button>
        </form>
   </Layout>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue'
import Layout from '../../Shared/Layout.vue'

export default {
    data (){
        return {
            user: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    props: {
        title: String
    },
    components:{
        Link,
        Head,
        Layout
    },
    methods: {
        create() {
            this.$inertia.post('/user/create', this.user)
        }
    }
}
</script>

<style>
    .form-group{
        margin-bottom: 5px;
    }
</style>