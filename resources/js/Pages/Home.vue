<template>
   <div>
        <h1>Halo {{ title }}</h1>
        <Link href="/about" as="button">About</Link>
   </div>
</template>

<style>

</style>

<script>
// Import Component
import { Link } from '@inertiajs/inertia-vue'

export default {
    props: ['title'],
    components: {
        Link
    }
}
</script>