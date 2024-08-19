<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <html>
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
        <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
      </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="flex justify-center relative text-3xl font-bold text-black" style="">My Rubbish Bins</h1>
            <p class="flex justify-center relative text-1xl text-black" style="padding-top: 20px">Select the rubbish bin you want to view information about.</p>


            <div class="flex justify-center" style="padding-top: 50px">
                <a href="dashboard-bindetail" class="p-4 rounded-md text-base font-semibold text-black shadow-md bg-white" style="width: 800px; text-align: center">Living Room Bin</a>
            </div>

            <br>
            @foreach($bins as $bin)
                <div class="flex justify-center py-6">
                    <a href="{{ route('bins.show', $bin->id) }}" class="p-4 rounded-md text-base font-semibold text-black shadow-md bg-white" style="width: 800px; text-align: center">{{ $bin->name }}</a>
                </div>
            @endforeach

        </div>
    </div>

    </html>
</x-app-layout>
