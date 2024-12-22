<!--
Product: Metronic is a toolkit of UI components built with Tailwind CSS for developing scalable web applications quickly and efficiently
Version: v9.1.1
Author: Keenthemes
Contact: support@keenthemes.com
Website: https://www.keenthemes.com
Support: https://devs.keenthemes.com
Follow: https://www.twitter.com/keenthemes
License: https://keenthemes.com/metronic/tailwind/docs/getting-started/license
-->
<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" dir="ltr" lang="en">

<head>
    <base href="../../../../">
    <title>
        @yield('title', config('app.name')) - {{ config('app.name') }}
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="https://127.0.0.1:8001/metronic-tailwind-html/demo1/authentication/classic/sign-in" rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="Flixhub is a modern and fully responsive movie streaming website." name="description" />
    <meta content="@pontadev" name="twitter:site" />
    <meta content="@pontadev" name="twitter:creator" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="@yield('title', config('app.name')) - {{ config('app.name') }}" name="twitter:title" />
    <meta content="Flixhub is a modern and fully responsive movie streaming website." name="twitter:description" />
    <meta content="assets/media/app/og-image.png" name="twitter:image" />
    <meta content="https://127.0.0.1:8001/metronic-tailwind-html/demo1/authentication/classic/sign-in"
        property="og:url" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="@pontadev" property="og:site_name" />
    <meta content="@yield('title', config('app.name')) - {{ config('app.name') }}" property="og:title" />
    <meta content="Flixhub is a modern and fully responsive movie streaming website." property="og:description" />
    <meta content="assets/media/app/og-image.png" property="og:image" />
    <link href="assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="assets/media/app/favicon.ico" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.ponta.dev/fa/671/css/all.min.css" />
    @vite('resources/css/app.scss')
    @yield('styles')
</head>

<body class="antialiased flex h-full text-base text-gray-700 dark:bg-coal-500">
    <!-- Theme Mode -->
    @include('components.themeMode')
    <!-- End of Theme Mode -->
    <!-- Page -->
    <style>
        .page-bg {
            background-image: url('assets/media/images/2600x1200/bg-10.png');
        }

        .dark .page-bg {
            background-image: url('assets/media/images/2600x1200/bg-10-dark.png');
        }
    </style>
    <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
        <div class="card max-w-[370px] w-full">
            @yield('content')
        </div>
    </div>
    <!-- End of Page -->
    <!-- Scripts -->
    @vite('resources/js/app.js')
    @yield('scripts')
    <!-- End of Scripts -->
</body>

</html>
