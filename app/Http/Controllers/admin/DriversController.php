<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DriversController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        $riders = User::where('role', 'rider')->get();
        return view('admin.riders.index', [
            'riders' => $riders,
        ]);
    }

    public function create()
    {
        return view('admin.riders.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|max:20',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'zip_code' => 'nullable|string|max:20',
        ]);

        $rider = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            'role' => 'rider',  // Assign the role as 'rider'
        ]);

        $rider->save();

        return redirect()->route('riders.index')->with('success', 'Delivery Person created successfully.');
    }

    public function edit($id)
    {
        $rider = User::findOrFail($id);
        return view('admin.riders.edit', compact('rider'));
    }

    // Update user data
    public function update(Request $request, $id)
    {
        $rider = User::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $rider->id,
            'password' => 'nullable|string|min:8|confirmed',
            'phone_number' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'zip_code' => 'nullable|string|max:20',
        ]);

        $rider->name = $request->name;
        $rider->email = $request->email;
        if ($request->password) {
            $rider->password = Hash::make($request->password);
        }
        $rider->phone_number = $request->phone_number;
        $rider->city = $request->city;
        $rider->state = $request->state;
        $rider->country = $request->country;
        $rider->zip_code = $request->zip_code;
        $rider->save();

        return redirect()->route('riders.index', $rider->id)->with('success', 'Delivery Person updated successfully');
    }

    // Delete a user
    public function destroy($id)
    {
        // Find the user
        $rider = User::find($id);
    
        if ($rider) {
            // Optionally, handle related orders
            // Delete the user
            $rider->delete();
    
            return redirect()->route('riders.index')->with('success', 'Delivery Person deleted successfully.');
        }
    
        return redirect()->route('riders.index')->with('error', 'Delivery Person not found.');
    }
}
