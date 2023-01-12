<script setup>
import SidebarVue from '@/Components-ISRI/Sidebar.vue';
import HeaderVue from '@/Components-ISRI/Headerisri.vue';
</script>

<template>
    <div class="flex h-screen overflow-hidden">
        <SidebarVue :showModalOrHiddenResponsive="AbrirOcerrarSidebar"/>
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <HeaderVue @showModalOrHidden="actionToOpenOrHidden"/>
        </div>
    </div>
</template> 

<script>
export default {
    data: function (){
        return {
            AbrirOcerrarSidebar: false
        }
    },
    methods:{
        actionToOpenOrHidden(){
            this.AbrirOcerrarSidebar = !this.AbrirOcerrarSidebar
        },
    }
}
</script>

