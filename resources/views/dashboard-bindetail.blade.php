<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


        <div class="absolute" style="height: 300px; width: 400px; top: 250px; left: 200px">

{{--            bin title --}}
            <h1 class="flex justify-center font-bold" style="font-size: 30px">Example</h1>

{{--            change button --}}
            <div class="relative flex justify-center" style="height: 40px; top: 40px;">
                <a href="{{route('dashboard')}}" class="shadow" style="width: 200px; height: 40px; background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; text-align: center;">Change</a>
            </div>

{{--            status--}}
            <div class="relative shadow rounded-2xl" style="height: 200px; width: 400px; top: 60px; margin-left: auto; margin-right: auto;">
                <div class="max-w-max rounded-t-2xl" style="background-color: #4CAF50; text-align: center; padding-top: 10px; padding-bottom: 10px;">
                    <p class="text-white">Date & Time</p>
                    <p class="text-white">...</p>
                </div>
                <p class="text-3xl" style="text-align: center; padding-top: 30px;">
                    Bin level capacity is low
                </p>

            </div>

        </div>

{{--    level capacity --}}
        <div class="absolute shadow" style="height: 500px; width: 500px; top: 200px; right: 250px">

        </div>

</x-app-layout>
