<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Welcome</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center w-full max-w-md">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Welcome</h2>
            <p class="text-gray-700 dark:text-gray-300">Choose an option to proceed</p>
            <div class="flex flex-row justify-center mt-4">
                <a href="{{ route('login') }}" class="bg-blue-500 text-white hover:bg-blue-400 p-2 rounded-md mr-4">Login</a>
                <a href="{{ route('register') }}" class="bg-green-500 text-white hover:bg-green-400 p-2 rounded-md">Register</a>
            </div>
        </div>
    </div>
</body>
</html>