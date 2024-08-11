<?php

// app/Http/Controllers/BinController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;

class BinController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'bin_id' => 'required|unique:bins,bin_id',
            'verification_code' => 'required',
        ]);
    
        // Create a new Bin instance and save it to the database
        $bin = new Bin();
        $bin->name = $validatedData['name'];
        $bin->bin_id = $validatedData['bin_id'];
        $bin->verification_code = $validatedData['verification_code'];
        $bin->save();
    
        // Redirect to the admin dashboard with a success message
        return redirect()->route('dashboardadmin')->with('success', 'New bin added successfully!');
    }
    
    public function index()
    {
        $bins = Bin::all();
        return view('dashboardadmin', compact('bins'));
    }
}