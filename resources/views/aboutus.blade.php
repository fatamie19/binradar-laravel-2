<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <html>
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
        <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
      </head>

        <h1 class="flex justify-center relative text-2xl" style="top: 100px; color: #16a34a">Bin Radar</h1>
        <div style="width: 50px; height: 50px;"></div>
        <p class="flex justify-center relative text-xl" style="top: 80px; text-align: center;" >

            Welcome to BinRadar! We are on a mission to <br>
            transfer waste management using cutting edge IoT Technology <br>
            Our real-time monitoring system ensures bins are emptied efficiently, <br>
            saving cost and reducing environmental impact. <br>
            Join us in our journey towards a cleaner, greener future!
        </p>

    </html>
</x-app-layout>
