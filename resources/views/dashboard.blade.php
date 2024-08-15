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
                <button id="example-btn" class="p-4 rounded-md text-sm font-semibold text-black shadow" style="width: 800px">EXAMPLE</button>
            </div>

        </div>
    </div>


{{-- when any button is pressed, below will be shown --}}

    <div id="right-side" style="display: none">

        <div class="absolute" style="height: 300px; width: 400px; top: 250px; left: 200px">
            <h1 class="flex justify-center font-bold" style="font-size: 30px">Example</h1>
            <div class="relative" style="height: 40px; width: 200px; top: 40px; margin-left: auto; margin-right: auto;">
                <button class="shadow" style="height: 40px; width: 200px; background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Change</button>
            </div>
            <div class="relative shadow" style="height: 200px; width: 400px; top: 60px; margin-left: auto; margin-right: auto;"></div>
        </div>

        <div class="absolute shadow" style="height: 500px; width: 500px; top: 200px; right: 250px"></div>

        <button class="relative" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-bottom: 10px; top: 20px; left: 20px;" id="back-btn">
            Back
        </button>

    </div>


    <script>
        const exampleBtn = document.getElementById('example-btn');
        const backBtn = document.getElementById('back-btn');
        const leftSide = document.getElementById('left-side');
        const rightSide = document.getElementById('right-side');

        exampleBtn.addEventListener('click', () => {
            leftSide.style.display = 'none';
            rightSide.style.display = 'block';
        });

        backBtn.addEventListener('click', () => {
            leftSide.style.display = 'block';
            rightSide.style.display = 'none';
        });
    </script>





</x-app-layout>
