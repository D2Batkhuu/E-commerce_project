<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include CSS or other head elements here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <header class="bg-white shadow p-4">
        <div class="container mx-auto">
            {{ $header ?? 'MyApp' }}
        </div>
    </header>
    <main class="py-6">
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </main>
    <footer class="bg-gray-200 text-center py-4">
        <p>© {{ date('Y') }} MyApp. All rights reserved.</p>
    </footer>
</body>
</html>
