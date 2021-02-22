<template>
    <app-layout>
        <template #header>
            <div
                class="h-screen pb-14 bg-right bg-cover"
                style="background-image: url('bg.svg')"
            >
                <!--Main-->
                <div
                    class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center"
                >
                    <!--Left Col-->
                    <div
                        class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden"
                    >
                        <h1
                            class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1"
                        >
                            Welcome to Bobs Blog!
                        </h1>
                        <p
                            class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle"
                        >
                            Created in late Feburary 2021 its a rather unique
                            project to show off some of my development skills.
                        </p>

                        <p
                            class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in"
                        >
                            Thanks for joining, now please feel free to post about
                            your day! :)
                        </p>
                        <div
                            class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in"
                        ></div>
                    </div>

                    <!--Footer-->
                    <div
                        class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in"
                    >
                        <a
                            class="text-gray-500 no-underline hover:no-underline"
                            href="#"
                            >&copy; Bobby McGrath 2021</a
                        >
                    </div>
                </div>
            </div>
        </template>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout,
    },
};
</script>
