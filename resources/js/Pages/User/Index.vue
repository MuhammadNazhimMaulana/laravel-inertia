<template>
    <div>
        <h1>{{ title }}</h1>

        <ul>
            <li v-for="user in users" :key="user">{{user.name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        users: Array
    }
}
</script>

<style>

</style>