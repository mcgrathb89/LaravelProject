<template>
    <app-layout>
        <template #header>
            <br />
            <form
                @submit.prevent="addPost"
                class="bg-grey shadow-md rounded px-8 pt-6 pb-8 mb-4"
                id="postsForm"
            >
                <h2
                    class="font-bold text-xl text-purple-800 leading-tight text-center"
                >
                    Create New Blog Post
                </h2>
                <br /><br />
                <label class="text-black-600 font-light">Post Title</label>
                <input
                    v-model="posts.title"
                    type="text"
                    placeholder="Enter your post title here..."
                    class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"
                />
                <br />
                <label class="text-black-600 font-light">Post Body</label>
                <br />
                <textarea
                    v-model="posts.body"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    rows="4"
                    placeholder="Tell us about your day..."
                ></textarea>
                <br /><br />
                <button
                    type="submit"
                    class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-2 focus:outline-none"
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
                <br /><br />

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

    methods: {
        async addPost() {
            const response = await axios.post("./api/posts", this.posts);
            if (response === 201) {
                Toast.fire({
                    icon: "success",
                    title: response.data,
                });
                document.getElementById("postForm").reset();
            }
        },
    },
};
</script>
