<script setup>
import SidebarVue from '@/Components-ISRI/Sidebar.vue';
import HeaderVue from '@/Components-ISRI/Headerisri.vue';
</script>

<template>
    <div class="flex h-screen overflow-hidden">
        <SidebarVue />
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <HeaderVue />

            Soy presupuesto
        </div>
        
    </div>
</template>
