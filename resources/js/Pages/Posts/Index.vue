<template>
    <Head title="Post List" />
    <AppLayout>
        <Link :href="route('posts.create')" :class="{ 'font-bold': $page.component === 'Posts/Create' }"
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Add New Post</Link>
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Content</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="text-gray-700" v-for="post in posts" :key="post.id">
                        <td class="px-4 py-3 border">
                            {{ post.id }}
                        </td>
                        <td class="px-4 py-3 text-ms border">{{ post.title }}</td>
                        <td class="px-4 py-3 text-xs border">{{ post.content }}
                        </td>
                        <td class="px-4 py-3 text-sm border">{{ post.created_at }}</td>
                        <td class="px-4 py-3 text-sm border">
                            <button @click="destroy(post.id)"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from "../../Layouts/App.vue";
import { Head, Link } from "@inertiajs/vue3"
import { Inertia } from "@inertiajs/inertia"

export default {
    components: {
        AppLayout,
        Head,
        Link
    },
    props: {
        posts: Object,
    },
    setup() {
        const destroy = (id) => {
            if (confirm('Are you sure?')) {
                Inertia.delete(route('posts.destroy', id))
            }
        }

        return { destroy }
    }
};
</script>
