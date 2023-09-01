<template>
      <Head title="About Us"/>
      <AppLayout>
            <div class="flex flex-col">
                  <h2>About Us.</h2>
                  <h2>Text About Us...</h2>
            </div>
      </AppLayout>
</template>
<script>
import AppLayout from "../Layouts/App.vue";
import { Head } from "@inertiajs/vue3"

export default {
      components: {
            AppLayout,
            Head
      }
};
</script>
