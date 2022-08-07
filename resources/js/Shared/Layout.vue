<template>
  <main>
    <header>
      <Link href="/home">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/user">User</Link>
    </header>
    <article>
      <slot />
    </article>
    <footer>
        <p>&copy; Bonevian 2022</p>
    </footer>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'

export default {
  components: {
    Link,
  }
}
</script>