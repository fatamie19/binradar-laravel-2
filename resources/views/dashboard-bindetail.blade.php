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
                    <p class="text-black">17th March 2024 / 03:30pm</p>
                </div>
                <p class="text-3xl" style="text-align: center; padding-top: 30px;">
                    Bin level capacity is low
                </p>

            </div>

        </div>

{{--    level capacity --}}
        <div class="absolute shadow flex justify-center" style="height: 500px; width: 500px; top: 200px; right: 250px">

            <?php
            $capacity = 20; // Change this value to test different capacity levels
            $colors = array(
                'high' => '#e52828', // Red (70-100%)
                'medium' => '#dce528', // Yellow (30-70%)
                'low' => '#3dbd2a' // Green (0-30%)
            );

            if ($capacity <= 30) {
                $color = $colors['low'];
            } elseif ($capacity <= 70) {
                $color = $colors['medium'];
            } else {
                $color = $colors['high'];
            }

            $height = $capacity * 3; // Adjust the multiplier to change the height

            echo '
            <div class="relative" style="top: 100px; height: 300px; width:200px; overflow: hidden; border: solid 1px;">
            <div style="position: absolute; bottom: 0; width: 200px; height: ' . $height . 'px; background-color: ' . $color . ';"></div>
            </div>
            <p class="absolute" style="top: 50%; font-size: 20px">'. $capacity .  '%</p>';
            ?>

        </div>

</x-app-layout>
