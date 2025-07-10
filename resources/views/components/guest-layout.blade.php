<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-cloud flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        {{ $slot }}
    </div>
</body>

</html>