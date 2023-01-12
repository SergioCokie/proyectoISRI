<template>
    <div id="sidebar" :class="(OpenSideBar ? 'lg:overflow-y-auto' : '')"
        class="test flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll  no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out -translate-x-64">
        <!-- Sidebar header -->
        <div class="flex justify-center mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <!-- TODO: boton que muestra el modal en dispositivos moviles / arreglar -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" aria-controls="sidebar"
                aria-expanded="false"><span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z">

                    </path>
                </svg>
            </button>
            <!-- Logo -->
            <a aria-current="page" href="/" class="router-link-active router-link-exact-active block">
                <img style="width:118px"
                    src="https://www.presidencia.gob.sv/wp-content/uploads/2019/06/LogoPagina_Mesa-de-trabajo-1.png"
                    alt="GOBIERNO DE EL SALVADOR">

            </a>
        </div>
        <div class="space-y-8">
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span v-if="!OpenSideBar"
                        class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span v-else class="">Pages</span>
                </h3>
                <ul class="mt-3">
                    <!-- Dashboard -->
                    <Modules v-for="(datos, i) in data" :key="i" :modulo="datos" :AbrirModal="OpenSideBar"
                        @mostrandoElModal="hiddenSideBar" :CerrarTodosLosModulos="CloseAllModules"
                        :background-color="true" />

                </ul>
            </div>

        </div><!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-2">
                <button @click="hiddenSideBar">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current" :class="OpenSideBar ? 'rotate-180' : 'rotate-360'"
                        viewBox="0 0 24 24">
                        <path class="text-slate-400"
                            d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                        <path class="text-slate-600" d="M3 23H1V1h2z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>


</template>

<script>
import Modules from './Modules.vue'

export default {
    data: function () {
        return {
            OpenSideBar: true,
            OpenModule: false,
            CloseAllModules: false,
            OpenSidebarResponsive: "-translate-x-64",
            data: [
                {
                    backgroundColor: true,
                    titulo: 'Catalogos',
                    icon: 'M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z',
                    SubModulos: [
                        {
                            'name': 'Opcion 1 de Catalogos',
                            'link': '/catalog/Opcion 1 de Catalogos'

                        },
                        {
                            'name': 'Opcion 2 de Catalogos',
                            'link': '/catalog/Opcion 2 de Catalogos'

                        },
                        {
                            'name': 'Opcion 3 de Catalogos',
                            'link': '/catalog/Opcion 3 de Catalogos'

                        },

                    ]

                },
                {
                    backgroundColor: false,
                    titulo: 'Proceso',
                    icon: 'M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181',

                    SubModulos: [
                        {
                            'name': 'Presupuesto',
                            'link': '/presupuesto'

                        },
                        {
                            'name': 'Opcion 2 de Proceso',
                            'link': '/proceso/Opcion 2 de Proceso'

                        },
                        {
                            'name': 'Opcion 3 de Proceso',
                            'link': '/proceso/Opcion 3 de Proceso'

                        },
                        {
                            'name': 'Opcion 4 de Proceso',

                        }
                    ]

                },
                {
                    backgroundColor: false,
                    titulo: 'Reportes',
                    SubModulos: [
                        {
                            'name': 'RRHH',
                            'link': '/rrhh'

                        },
                        {
                            'name': 'Opcion 2 de Reportes',

                        },

                    ]

                },
            ]
        }
    },
    props: ["showModalOrHiddenResponsive"],
    components: {
        Modules,
    },
    methods: {
        hiddenSideBar() {
            this.OpenSideBar = !this.OpenSideBar
            this.CloseAllModules = !this.CloseAllModules
        },
        hiddenModule() {
            if (!this.OpenSideBar) {
                this.hiddenSideBar()
            } else {
                this.OpenModule = !this.OpenModule
            }
        },
        /* openOrCloseSidebar(param) {//parametro vinario true muestra el modal false lo oculta
            let ToClose = "-translate-x-64"
            let ToShow = "-translate-x-0"
            if (param) {
                this.OpenSidebarResponsive = ToShow
            }else{
                this.OpenSidebarResponsive = ToClose
            }

        }, */

    },
    created: function () {
        var currentUrl = window.location.pathname;
        console.log(`Current URL => ${currentUrl}`);
    },
    watch: {
        showModalOrHiddenResponsive: function (newParam, oldParam) {
            //this.openOrCloseSidebar(newParam)
        }
    }
}
</script>

<style>
@media (min-width: 1024px) {
    .lg\:overflow-y-auto {
        width: 16rem !important;
    }
}

.test {
    overflow: auto;
    scrollbar-width: none;
    /*Firefox*/
}

/*Webkit*/
.test::-webkit-scrollbar {
    width: 0;
}
</style>