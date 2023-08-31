<template>
      <Link :href="route('posts.index')">Posts</Link>
      <Link :href="route('about')">About</Link>
      <div class="flex flex-col">
            <h2>About Us.</h2>
            <h2>Text About Us...</h2>
      </div>
</template>
<script>
import { Link } from '@inertiajs/vue3';

export default {
      components: {
            Link
      }
};
</script>
