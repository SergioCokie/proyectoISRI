<template>
    <li v-if="this.$page.props.user.permissions.includes(infoModule.link) " class="mb-1 last:mb-0 hover:scale-110 transform transition-all duration-500">
        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" :href="infoModule.link">
            <span class="text-sm font-medium  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                {{ infoModule.name }}
            </span>
        </a>
    </li>
</template>

<script>
export default {
    props: ["infoModule"]
}
</script>

<style>

</style>