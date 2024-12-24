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
                <div class="menu flex flex-col w-full gap-1.5 px-3.5" data-menu="true"
                    data-menu-accordion-expand-all="false" id="sidebar_primary_menu">
                    <div class="menu-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                        <a class="menu-link gap-2.5 py-2 px-2.5 rounded-md menu-item-active:bg-gray-100 menu-link-hover:bg-gray-100 !menu-item-here:bg-transparent"
                            href="{{ route('admin.home') }}">
                            <span
                                class="menu-icon items-start text-lg text-gray-600 menu-item-active:text-gray-900 menu-item-here:text-gray-900">
                                <i class="ki-filled ki-home-3">
                                </i>
                            </span>
                            <span
                                class="menu-title text-sm text-gray-800 font-medium menu-item-here:text-gray-900 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                {{ __('Analytics') }}
                            </span>
                        </a>
                    </div>
                    <div class="menu-item {{ request()->routeIs('admin.settings.*') ? 'here show' : '' }} menu-item-accordion"
                        data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                        <div
                            class="menu-link gap-2.5 py-2 px-2.5 rounded-md !menu-item-hover:bg-transparent !menu-item-here:bg-transparent">
                            <span
                                class="menu-icon items-start text-gray-400 text-lg menu-item-here:text-gray-900 menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                <i class="ki-filled ki-setting-2"></i>
                            </span>
                            <span
                                class="menu-title font-medium text-sm text-gray-700 menu-item-here:text-gray-900 menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                {{ __('Settings') }}
                            </span>
                            <span
                                class="menu-arrow text-gray-400 menu-item-here:text-gray-400 menu-item-show:text-gray-800 menu-link-hover:text-gray-800">
                                <i class="ki-filled ki-down text-3xs menu-item-show:hidden">
                                </i>
                                <i class="ki-filled ki-up text-3xs hidden menu-item-show:inline-flex">
                                </i>
                            </span>
                        </div>
                        <div class="menu-accordion gap-px ps-7">
                            <div class="menu-item {{ request()->routeIs('admin.settings.search') ? 'active' : '' }}">
                                <a class="menu-link py-2 px-2.5 rounded-md menu-item-active:bg-gray-100 menu-link-hover:bg-gray-100"
                                    href="{{ route('admin.settings.search') }}">
                                    <span
                                        class="menu-title text-2sm text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900 menu-link-hover:text-pgray-900">
                                        {{ __('Local Search') }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                        <a class="menu-link gap-2.5 py-2 px-2.5 rounded-md menu-item-active:bg-gray-100 menu-link-hover:bg-gray-100 !menu-item-here:bg-transparent"
                            href="{{ route('admin.home') }}">
                            <span
                                class="menu-icon items-start text-lg text-gray-600 menu-item-active:text-gray-900 menu-item-here:text-gray-900">
                                <i class="ki-filled ki-user"></i>
                            </span>
                            <span
                                class="menu-title text-sm text-gray-800 font-medium menu-item-here:text-gray-900 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                {{ __('Users') }}
                            </span>
                        </a>
                    </div>
                    <div class="menu-item {{ request()->routeIs('admin.roles.*') ? 'active' : '' }}">
                        <a class="menu-link gap-2.5 py-2 px-2.5 rounded-md menu-item-active:bg-gray-100 menu-link-hover:bg-gray-100 !menu-item-here:bg-transparent"
                            href="{{ route('admin.home') }}">
                            <span
                                class="menu-icon items-start text-lg text-gray-600 menu-item-active:text-gray-900 menu-item-here:text-gray-900">
                                <i class="ki-filled ki-users"></i>
                            </span>
                            <span
                                class="menu-title text-sm text-gray-800 font-medium menu-item-here:text-gray-900 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                {{ __('Roles') }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of Primary Menu -->
        </div>
    </div>
    <!-- End of Sidebar menu-->
    <!-- Footer -->
    @include('components.admin.sidebarFooter')
    <!-- End of Footer -->
</div>
