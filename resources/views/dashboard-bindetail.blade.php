<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div id="right-side" >
{{--        style="display: none"--}}

        <div class="absolute" style="height: 300px; width: 400px; top: 250px; left: 200px">
            <h1 class="flex justify-center font-bold" style="font-size: 30px">Example</h1>
            <div class="relative" style="height: 40px; width: 200px; top: 40px; margin-left: auto; margin-right: auto;">
                <button class="shadow" style="height: 40px; width: 200px; background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Change</button>
            </div>
            <div class="relative shadow" style="height: 200px; width: 400px; top: 60px; margin-left: auto; margin-right: auto;"></div>
        </div>

        <div class="absolute shadow" style="height: 500px; width: 500px; top: 200px; right: 250px"></div>

        <a href="dashboard" class="relative" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-bottom: 10px; top: 20px; left: 20px;">
            Back
        </a>

    </div>

</x-app-layout>
