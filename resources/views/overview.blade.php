<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col" data-theme="corporate">
    <x-double-navbar :user="$user" />
    <div class="flex-1">
        <div class="container mx-auto py-2">
            <div class="bg-white shadow-md rounded-sm p-4">
                <h1 class="text-lg md:text-base font-bold text-gray-600 mb-4">Overview</h1>
                <hr class="border-t border-gray-200 mb-4" />
                <p class="text-xs text-gray-400">Welcome to your overview!</p>
            </div>
        </div>
    </div>
    <x-footer />
</body>
</html> 