<template>
      <div>
            <section class="container mx-auto p-6 font-mono">
                  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <Link :href="route('posts.index')" :class="{ 'font-bold': $page.component === 'Posts/Index' }"
                              class="px-2">
                        Posts</Link>
                        <Link :href="route('about')" :class="{ 'font-bold': $page.component === 'About' }">About</Link>
                        <slot />
                  </div>
            </section>
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
