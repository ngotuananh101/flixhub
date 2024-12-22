<div class="flex-col fixed top-0 bottom-0 z-20 hidden lg:flex items-stretch shrink-0 w-[--tw-sidebar-width] dark"
    data-drawer="true" data-drawer-class="drawer drawer-start flex top-0 bottom-0" data-drawer-enable="true|lg:false"
    id="sidebar">
    <!-- Sidebar Header -->
    @include('components.admin.sidebarHeader')
    <!-- End of Sidebar Header -->
    <!-- Sidebar menu -->
    <div class="flex items-stretch grow shrink-0 justify-center my-5" id="sidebar_menu">
        <div class="scrollable-y-auto grow [--tw-scrollbar-thumb-color:var(--tw-gray-300)]" data-scrollable="true"
            data-scrollable-dependencies="#sidebar_header, #sidebar_footer" data-scrollable-height="auto"
            data-scrollable-offset="0px" data-scrollable-wrappers="#sidebar_menu">
            <!-- Primary Menu -->
            <div class="mb-5">
                <h3 class="text-sm text-gray-500 uppercase ps-5 inline-block mb-3">
                    Pages
                </h3>
                <div class="menu flex flex-col w-full gap-1.5 px-3.5" data-menu="true"
                    data-menu-accordion-expand-all="false" id="sidebar_primary_menu">
                    <div class="menu-item">
                        <a class="menu-link gap-2.5 py-2 px-2.5 rounded-md menu-item-active:bg-gray-100 menu-link-hover:bg-gray-100 !menu-item-here:bg-transparent"
                            href="html/demo10.html">
                            <span
                                class="menu-icon items-start text-lg text-gray-600 menu-item-active:text-gray-900 menu-item-here:text-gray-900">
                                <i class="ki-filled ki-home-3">
                                </i>
                            </span>
                            <span
                                class="menu-title text-sm text-gray-800 font-medium menu-item-here:text-gray-900 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                Overview
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of Primary Menu -->
            <!-- Secondary Menu -->
            <div>
                <h3 class="text-sm text-gray-500 uppercase ps-5 inline-block mb-3">
                    Outline
                </h3>
                <div class="menu flex flex-col w-full gap-1.5 px-3.5" data-menu="true"
                    data-menu-accordion-expand-all="true" id="sidebar_secondary_menu">
                    <div class="menu-item">
                        <a class="menu-link py-1 px-2.5" href="https://keenthemes.com/metronic/tailwind/docs/">
                            <span
                                class="rounded-md flex items-center justify-center size-7 bg-coal-black menu-link-hover:border-none me-2">
                                <img alt="" class="size-3.5" src="assets/media/brand-logos/x-dark.svg">
                                </img>
                            </span>
                            <span
                                class="menu-title text-2sm text-gray-700 menu-item-here:text-gray-900 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                @keenthemes
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link py-1 px-2.5" href="https://github.com/keenthemes/">
                            <span
                                class="rounded-md flex items-center justify-center size-7 bg-coal-black menu-link-hover:border-none me-2">
                                <img alt="" class="size-3.5" src="assets/media/brand-logos/slack.svg">
                                </img>
                            </span>
                            <span
                                class="menu-title text-2sm text-gray-700 menu-item-here:text-gray-900 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                @keenthemes_hub
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link py-1 px-2.5" href="https://keenthemes.com/metronic/tailwind/docs/">
                            <span
                                class="rounded-md flex items-center justify-center size-7 bg-coal-black menu-link-hover:border-none me-2">
                                <img alt="" class="size-3.5" src="assets/media/brand-logos/figma.svg" />
                            </span>
                            <span
                                class="menu-title text-2sm text-gray-700 menu-item-here:text-gray-900 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                metronic
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of Secondary Menu -->
        </div>
    </div>
    <!-- End of Sidebar menu-->
    <!-- Footer -->
    @include('components.admin.sidebarFooter')
    <!-- End of Footer -->
</div>
