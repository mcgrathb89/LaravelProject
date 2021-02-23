<template>
    <app-layout>
        <template #header>
            <br />
            <form
                method="POST"
                action="/blogaction"
                class="bg-grey shadow-md rounded px-8 pt-6 pb-8 mb-4"
            >
                <input type="hidden" name="_token" :value="csrf" />
                <h2
                    class="font-bold text-xl text-purple-800 leading-tight text-center"
                >
                    Create New Blog Post
                </h2>
                <br /><br />
                <label class="text-black-600 font-light">Post Title</label>
                <input
                    name="title"
                    type="text"
                    placeholder="Enter your post title here..."
                    class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"
                />
                <br />
                <label class="text-black-600 font-light">Post Body</label>
                <br />
                <textarea
                    name="body"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    rows="4"
                    placeholder="Tell us about your day..."
                ></textarea>
                <br /><br />
                <button
                    type="submit"
                    class="bg-purple-800 text-gray-200 rounded hover:bg-purple-500 px-4 py-2 focus:outline-none"
                >
                    Post
                </button>
                <br /><br /><br />

                <hr />
                <br />
                <h2
                    class="font-semibold text-xl text-grey-600 leading-tight text-center"
                >
                    Recent Posts
                </h2>
                <br />
                <hr />
                <br />

                <div v-for="post in posts" :key="post.body">
                    <br />
                    <strong
                        ><h5 :key="post.title">{{ post.title }}</h5></strong
                    >
                    {{ post.body }}
                    <br />
                    <small :key="post.created_at"
                        >Posted {{ moment(post.created_at).fromNow() }}</small
                    >
                    <br /><br />
                    <hr />
                </div>
            </form>

            <div
                class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in"
            >
                <a
                    class="text-gray-500 no-underline hover:no-underline"
                    href="#"
                    >&copy; Bobby McGrath 2021</a
                >
            </div>
        </template>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

var moment = require("moment");

export default {
    components: {
        AppLayout,
    },
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            moment: moment,
            posts: [],
            post: {
                title: "",
                body: "",
                created_at: "",
            },
        };
    },

    created() {
        axios
            .get("./api/posts")
            .then((response) => (this.posts = response.data));
    },
};
</script>
