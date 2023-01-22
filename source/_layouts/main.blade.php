<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800" rel="stylesheet">
        <script defer src="https://unpkg.com/@alpinejs/ui@3.10.5-beta.8/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/focus@3.10.5/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    </head>
    <body class="bg-gray-50 text-black font-sans antialiased">
        @yield('body')
    </body>
</html>
