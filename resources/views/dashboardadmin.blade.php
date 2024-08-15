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

          @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

          <div class="flex space-x-6 mb-6">

        <!-- Living Room Bin -->
            <div class="bg-white flex flex-col items-center p-4 border border-border rounded-lg shadow-md bg-card w-64 sm:w-80 lg:w-96">
              <img aria-hidden="true" alt="living-room-bin" src="https://openui.fly.dev/openui/100x100.svg?text=🗑️" class="w-12 h-12" /> 
              <span class="mt-2 font-semibold">Living room Bin</span>
              <span class="text-muted-foreground p-2">Successfully connected</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="size-6 text-green">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
              </svg>
              <button type="submit" class="mt-4 bg-red-500 text-white text-xs font-medium py-2 px-4 rounded shadow-md">Delete</button>
            </div>

        <!-- Kitchen Bin -->
            <div class="bg-white flex flex-col items-center p-4 border border-border rounded-lg shadow-md bg-card w-64 sm:w-80 lg:w-96">
              <img aria-hidden="true" alt="kitchen-bin" src="https://openui.fly.dev/openui/100x100.svg?text=🗑️" class="w-12 h-12"/>
              <span class="mt-2 font-semibold">Kitchen bin</span>
              <span class="text-muted-foreground p-2">Successfully connected</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="size-6 text-green">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
              </svg>
              <button type="submit" class="mt-4 bg-red-500 text-white text-xs font-medium py-2 px-4 rounded shadow-md">Delete</button>
            </div>
          </div>


        <!-- Bins from Form, retrieved from database -->

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6 justify-center">
          @foreach ($bins as $index => $bin)
              <div class="bg-white flex flex-col items-center p-4 border border-border rounded-lg shadow-md bg-card w-64 sm:w-80 lg:w-96 mb-4 
                  @if ($loop->remaining === 0 && $loop->odd) col-span-2 sm:justify-self-center @endif">
                  <img aria-hidden="true" alt="bin-image" src="https://openui.fly.dev/openui/100x100.svg?text=🗑️" class="w-12 h-12"/>
                  <span class="mt-2 font-semibold">{{ $bin->name }}</span>
                  <span class="text-muted-foreground p-2">Successfully connected</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="size-6 text-green">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                  </svg>
                  <!-- Delete Button -->
                  <form action="{{ route('bins.destroy', $bin->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this bin?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="mt-4 bg-red-500 text-white text-xs font-medium py-2 px-4 rounded shadow-md">
                          Delete
                      </button>
                  </form>
              </div>
          @endforeach
      </div>                              
      <div class="flex justify-center">
        <button id="openModal" class="bg-white border-border border-2 shadow-md rounded-lg p-4 mt-auto"> + Add new rubbish bin</button>
    </div>

    <!-- Modal -->
    <div id="binModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-800 bg-opacity-30">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md relative">
        <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
            &times;
        </button>
        <h1 class="text-2xl font-bold mb-4 py-4 text-center">Add New Rubbish Bin</h1> 

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <span class="block sm:inline">{{ $errors->first() }}</span>
        </div>
        @endif
        
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
        <script>
          document.getElementById('openModal').addEventListener('click', function() {
              document.getElementById('binModal').classList.remove('hidden');
          });

          document.getElementById('closeModal').addEventListener('click', function() {
              document.getElementById('binModal').classList.add('hidden');
          });

          // Close modal when clicking outside of it
          window.addEventListener('click', function(event) {
              const modal = document.getElementById('binModal');
              if (event.target === modal) {
                  modal.classList.add('hidden');
              }
          });
        </script>
        
        </div>
      </body>
    </html>
</x-app-layout>
