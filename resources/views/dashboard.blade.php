<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}

            <h1 class="flex justify-center relative text-3xl font-bold text-black" style="">My Rubbish Bins</h1>
            <p class="flex justify-center relative text-1xl text-black" style="padding-top: 20px">Select the rubbish bin you want to view information about.</p>


            <div class="flex justify-center" style="padding-top: 50px">
                <button class="p-4 rounded-md text-sm font-semibold text-black shadow btnhvr" style="width: 800px">EXAMPLE</button>
            </div>

        </div>
    </div>
</x-app-layout>
