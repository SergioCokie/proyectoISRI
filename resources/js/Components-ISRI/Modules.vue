<template>
    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="backgroundColor ? 'bg-slate-900' : ''"
        @click="hiddenModuleOrShow">
        <a class="block text-slate-200 hover:text-white truncate transition duration-150 " @click="hiddenModule"
            href="#0">
            <div class="flex items-center justify-between">
                <div class="flex items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 fill-red-900">
                        <path stroke-linecap="round" stroke-linejoin="round" :d="modulo.icon" />
                    </svg>

                    <span class="text-sm font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                        {{ modulo.titulo }}
                    </span>
                </div>
                <div class="flex shrink-0 ml-2">
                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                        :class="!OpenModule ? 'rotate-360' : 'rotate-180'" viewBox="0 0 12 12">
                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                    </svg>
                </div>
            </div>
        </a>
        <div class=" lg:sidebar-expanded:block 2xl:block">
            <ul class="pl-9 mt-1 " :class="!OpenModule ? 'hidden' : ''">
                <SubModulesVue v-for="(m, i) in subModulo" :key="i" :infoModule="m" />

            </ul>
        </div>
    </li>


</template>

<script>
import SubModulesVue from './SubModules.vue';

export default {
    props: ["background-color", "AbrirModal", "CerrarTodosLosModulos", "modulo"],
    data() {
        return {
            OpenModule: true,
            subModulo: this.modulo.SubModulos
        };
    },
    components: {
        SubModulesVue
    },
    methods: {
        closeOrOpenModule() {
            this.OpenModule = !this.OpenModule
        },
        hiddenModuleOrShow() {
            if (!this.AbrirModal) {
                this.$emit('mostrandoElModal')
            } else {
                this.OpenModule = !this.OpenModule
            }
        },
    },
    computed: {
        CloseEvent() {
            if (!this.CerrarTodosLosModulos) {
                this.OpenModule = false
            }
        }
    }

}
</script>

<style>

</style>