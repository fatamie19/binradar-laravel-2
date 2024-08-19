<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <html>
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
        <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
      </head>

      <div class="space-y-2 p-6 flex flex-col items-center">

        <div class="bg-green-500/30 p-4 rounded-lg flex items-center w-full md:w-2/4 shadow-lg">
            <img aria-hidden="true" alt="trash-can" src="https://openui.fly.dev/openui/24x24.svg?text=🗑️" class="mr-2" />
            <div>
            <p class="font-semibold">Kitchen Bin is almost full!</p>
            <span class="text-muted-foreground">14/02/2024 10:30 AM</span>
            </div>
        </div>
        
        <div class="bg-green-500/30 p-4 rounded-lg flex items-center w-full md:w-2/4 shadow-lg">
            <img aria-hidden="true" alt="trash-can" src="https://openui.fly.dev/openui/24x24.svg?text=🗑️" class="mr-2" />
            <div>
            <p class="font-semibold">Living Room Bin is full!</p>
            <span class="text-muted-foreground">18/02/2024 11:50 AM</span>
            </div>
        </div>

    </div>
</html>

</x-app-layout>
