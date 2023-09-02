<template>
    <Head title="Post List" />
    <AppLayout>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        #
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        Title
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        Content
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500 ">Created Time</th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Updated Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="post in posts" :key="post.id" class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                        {{ post.id }}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ post.title }}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ post.content }}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ post.created_at }}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ post.updated_at }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from "../../Layouts/App.vue";
import { Head } from "@inertiajs/vue3"

export default {
    components: {
        AppLayout,
        Head
    },
    props: {
        posts: Object,
    },
};
</script>
