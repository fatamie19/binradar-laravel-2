<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <html>
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
        <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
      </head>
      
      <body class="bg-background">
        <div class="flex flex-col items-center p-6">
          <h1 class="text-2xl font-bold mb-4 py-4">My Rubbish Bins</h1>

          <div class="flex space-x-6 mb-6">

            <div class="bg-white flex flex-col items-center p-4 border border-border rounded-lg shadow-md bg-card w-64 sm:w-80 lg:w-96">
              <img aria-hidden="true" alt="living-room-bin" src="https://openui.fly.dev/openui/100x100.svg?text=" class="w-20 h-20" />
              <span class="mt-2 font-semibold">Living room Bin</span>
              <span class="text-muted-foreground">Successfully connected</span>
              <span class="text-green-500 mt-1">✔️</span>
            </div>

            <div class="bg-white flex flex-col items-center p-4 border border-border rounded-lg shadow-md bg-card w-64 sm:w-80 lg:w-96">
              <img aria-hidden="true" alt="kitchen-bin" src="https://openui.fly.dev/openui/100x100.svg?text=" class="w-20 h-20"/>
              <span class="mt-2 font-semibold">Kitchen bin</span>
              <span class="text-muted-foreground">Successfully connected</span>
              <span class="text-green-500 mt-1">✔️</span>
            </div>
          </div>

          <button class="bg-white text-secondary-foreground border hover:bg-white/80 p-2 rounded-lg text-center">
            + <br> Add New Rubbish
          </button>
          
        </div>
      </body>
    </html>
</x-app-layout>
