<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12" id="left-side">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="flex justify-center relative text-3xl font-bold text-black" style="">My Rubbish Bins</h1>
            <p class="flex justify-center relative text-1xl text-black" style="padding-top: 20px">Select the rubbish bin you want to view information about.</p>


            <div class="flex justify-center" style="padding-top: 50px">
                <a href="dashboard-bindetail" class="p-4 rounded-md text-sm font-semibold text-black shadow" style="width: 800px; text-align: center">EXAMPLE</a>
            </div>

        </div>
    </div>

</x-app-layout>
