<div class="flex flex-col shrink-0 ps-4 pe-3.5 mb-3.5" id="sidebar_footer">
    <div class="flex flex-center justify-between">
        <div class="menu" data-menu="true">
            <div class="menu-item" data-menu-item-offset="-10px, 15px" data-menu-item-placement="right-end"
                data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                <div class="menu-toggle btn btn-icon rounded-full">
                    <img alt="" class="size-8 rounded-full justify-center border border-gray-500 shrink-0"
                        src="{{ auth()->user()->avatar }}" />
                </div>
                <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
                    <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                        <div class="flex items-center gap-2">
                            <img alt="" class="size-9 rounded-full border-2 border-success"
                                src="{{ auth()->user()->avatar }}" />
                            <div class="flex flex-col gap-1.5">
                                <span class="text-sm text-gray-800 font-semibold leading-none">
                                    {{ auth()->user()->name }}
                                </span>
                                <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none"
                                    href="html/demo10/account/home/get-started.html">
                                    {{ auth()->user()->email }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-separator">
                    </div>
                    <div class="flex flex-col">
                        <div class="menu-item">
                            <a class="menu-link" href="html/demo10/account/home/user-profile.html">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-profile-circle">
                                    </i>
                                </span>
                                <span class="menu-title">
                                    {{ __('My Profile') }}
                                </span>
                            </a>
                        </div>
                        <div class="menu-item" data-menu-item-offset="-10px, 0" data-menu-item-placement="left-start"
                            data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                            <div class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-icon">
                                    </i>
                                </span>
                                <span class="menu-title">
                                    {{ __('Language') }}
                                </span>
                                <div
                                    class="flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0">
                                    {{ __('English') }}
                                    <img alt="" class="inline-block size-3.5 rounded-full"
                                        src="{{ asset('assets/media/flags/united-states.svg') }}" />
                                </div>
                            </div>
                            <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]">
                                <div class="menu-item active">
                                    <a class="menu-link h-10" href="?dir=ltr">
                                        <span class="menu-icon">
                                            <img alt="" class="inline-block size-4 rounded-full"
                                                src="{{ asset('assets/media/flags/united-states.svg') }}" />
                                        </span>
                                        <span class="menu-title">
                                            {{ __('English') }}
                                        </span>
                                        <span class="menu-badge">
                                            <i class="ki-solid ki-check-circle text-success text-base">
                                            </i>
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link h-10" href="?dir=ltr">
                                        <span class="menu-icon">
                                            <img alt="" class="inline-block size-4 rounded-full"
                                                src="{{ asset('assets/media/flags/vietnam.svg') }}" />
                                        </span>
                                        <span class="menu-title">
                                            {{ __('Vietnamese') }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-separator">
                    </div>
                    <div class="flex flex-col">
                        <div class="menu-item mb-0.5">
                            <div class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-moon">
                                    </i>
                                </span>
                                <span class="menu-title">
                                    {{ __('Dark Mode') }}
                                </span>
                                <label class="switch switch-sm">
                                    <input data-theme-state="dark" data-theme-toggle="true" name="check"
                                        type="checkbox" value="1" />
                                </label>
                            </div>
                        </div>
                        <div class="menu-item px-4 py-1.5">
                            <a class="btn btn-sm btn-light justify-center" href="{{ route('logout') }}">
                                {{ __('Log out') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-1.5">
            <a class="btn btn-icon btn-icon-lg size-8 hover:bg-light hover:text-primary text-gray-600"
                href="{{ route('logout') }}">
                <i class="ki-filled ki-exit-right">
                </i>
            </a>
        </div>
    </div>
</div>
