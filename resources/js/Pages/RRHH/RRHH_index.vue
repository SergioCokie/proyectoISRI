<script setup>
import SidebarVue from '@/Components-ISRI/Sidebar.vue';
import HeaderVue from '@/Components-ISRI/Headerisri.vue';
</script>

<template>
    <div class="flex h-screen overflow-hidden">
        <SidebarVue />
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <HeaderVue />
            <pre>

                {{ currentPath }}
                {{ this.$page.props.user }}
            </pre>
            <main v-if="this.$page.props.user.permissions.includes(currentPath)">
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

                    <button type="button" v-if="$page.props.user.permissions.includes('read articles')"
                        class="text-blue-700 hovertext-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Red
                        Article</button>
                    <br>
                    <button type="button" v-if="$page.props.user.permissions.includes('write articles')"
                        class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Write
                        Article</button><br>
                    <button type="button" v-if="$page.props.user.permissions.includes('edit articles')"
                        class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Edit
                        Article</button>
                    <br>
                    <button type="button" v-if="$page.props.user.permissions.includes('delete articles')"
                        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Delete
                        Article</button>
                </div>
            </main>
        </div>

    </div>
</template>




