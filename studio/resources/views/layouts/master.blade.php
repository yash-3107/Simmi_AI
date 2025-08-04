<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Tailwind App')</title>

    <!-- Tailwind CDN (for prototyping) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS (if any) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>

<body class="bg-gray-100 font-sans text-gray-800">

    {{-- Header --}}
    @include('layouts.header')

    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        @include('layouts.sidebar')

        {{-- Main Content --}}
        @yield('content')
    </div>

    {{-- Footer --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    @stack('scripts')
</body>

</html>