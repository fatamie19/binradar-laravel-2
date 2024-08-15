<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login Form</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="flex bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden max-w-2xl w-full">
            <div class="w-1/2" style="background-color: rgb(134 239 172);">
                <!-- <img src="https://www.hdwallpapers.in/thumbs/2020/green_landscape_4k-t2.jpg" alt="Scenic landscape" class="object-cover h-full w-full" /> -->
            </div>
            <div class="w-1/2 p-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Login</h2>
                <p class="text-gray-700 dark:text-gray-300 py-2">Securely login to your account</p>
                <form class="mt-4" action="{{ route('loginadmin') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="email">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 focus:ring focus:ring-gray-500" placeholder="you@example.com" required />
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="password">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 focus:ring focus:ring-gray-500" placeholder="********" required />
                    </div>
                    <button type="submit" class="w-full text-white hover:bg-green-400 p-2 rounded-md font-semibold" style="background-color: rgb(22 163 74);">LOG IN</button>
                </form>
            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="text-black-500 hover:text-black-300 text-xs font-semibold">Login as User</a>
            </div>
            <div class="mt-4 text-center">
                    <a href="{{ route('register') }}" class="text-green-600 hover:text-green-400 text-xs font-semibold">Register</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>