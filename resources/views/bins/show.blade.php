<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bin Details') }}
        </h2>
    </x-slot>

    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
            <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
        </head>

        <body>
            <div class="max-w-2xl mx-auto p-8">
                <div class="flex items-center justify-between py-8 px-12 bg-white rounded-lg shadow-md">
                    <div class="flex flex-col space-y-2">
                        <h2 class="text-lg font-semibold">{{ $bin->name }}</h2>

                        <a href="{{ route('dashboard') }}" class="text-white bg-green-500 hover:bg-green-600/50 px-2 py-2 rounded w-1/2 justify-center flex shadow-md mb-12">
                            Change Bin
                        </a>

                        <div class="bg-muted p-4 rounded bg-white shadow-md rounded-lg">
                            <p class="text-muted-foreground">Date & Time</p>
                            <p class="font-medium text-xs">17 March 2024 / 03:30 PM</p>
                            <p class="mt-2 bg-white p-2 text-bold">Bin level capacity is low</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-20 h-20 bg-card rounded-full relative -ml-4">
                        <img aria-hidden="true" alt="bin" src="https://openui.fly.dev/openui/100x100.svg?text=🗑️" class="w-full h-full object-cover"/>
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 text-lg font-bold">5%</span>
                    </div>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>
