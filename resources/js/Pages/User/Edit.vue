<template>
     <Layout>
        <Head v-bind:title="title" />

        <!-- Form For User -->
        <form @submit.prevent="update">
            <div class="form-group">
                <label>Name</label>
                <input type="text" v-model="form.name">

                <!-- Errors name -->
                <p v-if="errors.name" class="error">
                    {{ errors.name }}
                </p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" v-model="form.email">

                <!-- Errors email -->
                <p v-if="errors.email" class="error">
                    {{ errors.email }}
                </p>
            </div>

            <button type="submit">Update</button>
        </form>
   </Layout>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue'
import Layout from '../../Shared/Layout.vue'

export default {
    data (){
        return {
            form: {
                name: this.user.name,
                email: this.user.email
            }
        }
    },
    props: {
        title: String,
        user: Object,
        errors: Object
    },
    components:{
        Link,
        Head,
        Layout
    },
    methods: {
        update() {
            this.$inertia.put('/user/' + this.user.id, this.form)
        }
    }
}
</script>

<style>

</style>