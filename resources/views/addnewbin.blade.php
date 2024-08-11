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
          <h1 class="text-2xl font-bold mb-4 py-4">Add New Rubbish Bin</h1> 

          @if ($errors->any())
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
              <strong class="font-bold">Whoops!</strong>
              <span class="block sm:inline">{{ $errors->first() }}</span>
          </div>
            @endif
          
          <div class="bg-card bg-white p-6 rounded-lg shadow-md w-full max-w-md">
          <form class="mt-4" action="{{ route('bins.store') }}" method="POST">
            @csrf
            <label class="block text-muted-foreground" for="bin-name">Name of the bin</label>
            <input type="text" id="bin-name" name="name" placeholder="Prayer room Bin" class="mt-1 p-2 w-full border border-border rounded-md focus:outline-none focus:ring focus:ring-ring"/>

            <label class="block text-muted-foreground mt-4" for="bin-id">Bin ID</label>
            <input type="text" id="bin-id" name="bin_id" placeholder="001" class="mt-1 p-2 w-full border border-border rounded-md focus:outline-none focus:ring focus:ring-ring"/>

            <label class="block text-muted-foreground mt-4" for="verification-code">Verification Code</label>
            <input type="text" id="verification-code" name="verification_code" placeholder="14hwc02" class="mt-1 p-2 w-full border border-border rounded-md focus:outline-none focus:ring focus:ring-ring"/>
                  
            <button type="submit" class="mt-6 bg-secondary text-secondary-foreground hover:bg-secondary/80 p-2 rounded-md w-full">Add</button>
          </form>
          </div>
        </div>
      </body>
    </html>
</x-app-layout>
