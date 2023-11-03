<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    @if (str_replace('_', '-', app()->getLocale()) == 'ar')
        dir="rtl"
    @else
        dir="ltr"
    @endif>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Prodcut</title>
        <link rel="icon" href="/logo-header.png">

        <style>
        .hasImage:hover section {
        background-color: rgba(5, 5, 5, 0.4);
        }
        .hasImage:hover button:hover {
        background: rgba(5, 5, 5, 0.45);
        }

        #overlay p,
        i {
        opacity: 0;
        }

        #overlay.draggedover {
        background-color: rgba(255, 255, 255, 0.7);
        }
        #overlay.draggedover p,
        #overlay.draggedover i {
        opacity: 1;
        }

        .group:hover .group-hover\:text-blue-800 {
        color: #2b6cb0;
        }
        </style>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
            <div id="loading-overlay" class="loading-overlay w-screen h-screen flex justify-center items-center bg-[#fcfefa]">
                <img class="loading-message" src="/loading.gif" alt="Loading ...">
            </div>
            <div id="content" style="display: none;"> <!-- ابدأ بإخفاء العنصر $slot -->
                {{ $slot }}
            </div>
            <script>
                window.addEventListener('load', function () {
                    const loadingOverlay = document.getElementById('loading-overlay');
                    loadingOverlay.style.display = 'none';
                    const content = document.getElementById('content');
                    content.style.display = 'block';
                });
            </script>
        </body>
</html>
