<template>
    <div>
        <h1>{{ title }}</h1>

        <ul>
            <li>
                <h3>{{ user.name }}</h3>
                <p>Email: <strong>{{ user.name }}</strong></p>
                <p>{{ user.created_at }}</p>
                <Link href="/users/">Kembali</Link>
            </li>
        </ul>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue'

export default {
    props: {
        title: String,
        user: Object
    },
    components:{
        Link,
        Head,
    }
}
</script>

<style>

</style>