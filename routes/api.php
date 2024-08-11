<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

// Grouping routes under the 'api' middleware
Route::middleware('api')->group(function () {
    
    // Define your API route
    Route::post('/receive-data', function (Request $request) {
        // Validate the incoming data
        $request->validate([
            'sensor_data' => 'required|numeric|min:0|max:100',
        ]);

        // Retrieve the sensor data
        $sensorData = $request->input('sensor_data');

        // Log or process the data
        Log::info("Received sensor data: {$sensorData}%");

        // Respond to the API call
        return response()->json(['status' => 'success', 'received_data' => $sensorData]);
    });

});
