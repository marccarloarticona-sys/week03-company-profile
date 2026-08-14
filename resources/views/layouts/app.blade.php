<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VECTORQ Auto Parts & Performance')</title>
    <meta name="description" content="@yield('description', 'VECTORQ Auto Parts & Performance')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>*, *::before, *::after { box-sizing: border-box; } html, body { margin: 0; padding: 0; overflow-x: hidden; }</style>
    @vite([
        'resources/css/navbar.css',
        'resources/css/footer.css',
        'resources/css/home.css',
        'resources/css/about.css',
        'resources/css/services.css',
        'resources/css/contact.css',
        'resources/js/navbar.js',
        'resources/js/footer.js',
        'resources/js/home.js',
        'resources/js/about.js',
        'resources/js/services.js',
        'resources/js/contact.js'
    ])
</head>
<body>

@include('components.navbar', ['active' => $active ?? ''])

@yield('content')

@include('components.footer')

</body>
</html>
