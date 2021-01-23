<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Initializations & Meta Tags -->
    @include('components.meta_tags')

    <!-- Favicons, Fonts & Styles -->
    @include('components.styles')

    @yield('styles')
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        @include('components.navbar')

        <main class="">
            @yield('content')

            <!-- Modals -->
            @include('components.modals')

            <!-- Footer -->
        </main>
        @include('components.footer')
    </div>

    <!-- Scripts -->
    @include('components.scripts')

    @yield('scripts')
</body>
</html>
