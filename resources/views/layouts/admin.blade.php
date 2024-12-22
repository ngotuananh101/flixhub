<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" dir="ltr"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="/">
    <title>
        @yield('title', config('app.name')) - {{ config('app.name') }}
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="{{ url()->current() }}" rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="Flixhub is a modern and fully responsive movie streaming website." name="description" />
    <meta content="@pontadev" name="twitter:site" />
    <meta content="@pontadev" name="twitter:creator" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="@yield('title', config('app.name')) - {{ config('app.name') }}" name="twitter:title" />
    <meta content="Flixhub is a modern and fully responsive movie streaming website." name="twitter:description" />
    <meta content="{{ asset('assets/media/app/og-image.png') }}" name="twitter:image" />
    <meta content="{{ url()->current() }}" property="og:url" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="@pontadev" property="og:site_name" />
    <meta content="@yield('title', config('app.name')) - {{ config('app.name') }}" property="og:title" />
    <meta content="Flixhub is a modern and fully responsive movie streaming website." property="og:description" />
    <meta content="{{ asset('assets/media/app/og-image.png') }}" property="og:image" />
    <link href="{{ asset('assets/media/app/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ asset('assets/media/app/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png" />
    <link href="{{ asset('assets/media/app/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png" />
    <link href="{{ asset('assets/media/app/favicon.ico') }}" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.ponta.dev/fa/671/css/all.min.css" />
    @vite('resources/css/app.scss')
    @yield('styles')
</head>

<body
    class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:var(--tw-coal-300)] [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-content-scrollbar-color:#e8e8e8] [--tw-header-height:60px] [--tw-sidebar-width:270px] bg-[--tw-page-bg] lg:overflow-hidden">
    <!-- Theme Mode -->
    @include('components.themeMode')
    <!-- End of Theme Mode -->
    <!-- Base -->
    <div class="flex grow">
        <!-- Header -->
        @include('components.admin.header')
        <!-- End of Header -->
        <!-- Wrapper -->
        <div class="flex flex-col lg:flex-row grow pt-[--tw-header-height] lg:pt-0">
            <!-- Sidebar -->
            @include('components.admin.sidebar')
            <!-- End of Sidebar -->
            <!-- Main -->
            <div
                class="flex flex-col grow lg:rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] lg:my-3 lg:mr-3">
                <div class="flex flex-col grow lg:scrollable-y-auto lg:[scrollbar-width:auto] lg:light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] pt-5"
                    id="scrollable_content">
                    <main class="grow" role="content">
                        @yield('content')
                    </main>
                    <!-- Footer -->
                    @include('components.admin.footer')
                    <!-- End of Footer -->
                </div>
            </div>
            <!-- End of Main -->
        </div>
        <!-- End of Wrapper -->
    </div>
    <!-- End of Base -->
    <!-- Scripts -->
    @vite('resources/js/app.js')
    @yield('scripts')
    <!-- End of Scripts -->
</body>

</html>
