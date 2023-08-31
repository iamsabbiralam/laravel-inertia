<template>
    <Link :href="route('posts.index')">Posts</Link>
    <Link :href="route('about')">About</Link>
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
                                <th scope="col" class="px-6 py-4">Created Time</th>
                                <th scope="col" class="px-6 py-4">Updated Time</th>
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
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ post.created_at }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ post.updated_at }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Link } from '@inertiajs/vue3';
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'

router.on('start', () => NProgress.start())
router.on('finish', () => NProgress.done())

export default {
    components: {
        Link
    },
    props: {
        posts: Object,
    },
};
</script>
