<template>
      <Link :href="route('posts.index')" :class="{ 'font-bold': $page.component === 'Posts/Index' }" class="px-2">Posts</Link>
      <Link :href="route('about')" :class="{ 'font-bold': $page.component === 'About' }">About</Link>
      <slot />
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
      components: {
            Link
      }
};
</script>
