<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="flex justify-center relative text-3xl font-bold text-black" style="">My Rubbish Bins</h1>
            <p class="flex justify-center relative text-1xl text-black" style="padding-top: 20px; padding-bottom: 20px;">Select the rubbish bin you want to view information about.</p>


            <div class="bg-white shadow rounded-lg p-4 text-center" style="width: 800px; margin: 10px auto;">
                <a href="dashboard-bindetail" class="text-lg font-semibold text-gray-700">Living Room Bin</a>
            </div>

            <br>
            @foreach($bins as $bin)
                <div class="bg-white shadow rounded-lg p-4 text-center" style="width: 800px; margin: 10px auto;">
                    <a href="{{ route('bins.show', $bin->id) }}" class="text-lg font-semibold text-gray-700">{{ $bin->name }}</a>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
