<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="min-h-screen bg-gray-50">
        <nav class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200">
            <div class="container flex items-center justify-center h-16 px-4 mx-auto">
                <a href="#">
                    <img src="/treinaweb.png" alt="Treinaweb" class="h-12">
                </a>
            </div>
        </nav>

        <div class="container px-4 pt-16 mx-auto">
            {{ $slot }}
        </div>
    </body>
</html>
