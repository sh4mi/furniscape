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
class UsersController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    // Update user data
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|in:admin,customer',
            'phone_number' => 'nullable|string|max:20',
            'shipping_address' => 'nullable|string',
            'billing_address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'zip_code' => 'nullable|string|max:20',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->phone_number = $request->phone_number;
        $user->shipping_address = $request->shipping_address;
        $user->billing_address = $request->billing_address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zip_code = $request->zip_code;
        $user->save();

        return redirect()->route('users.edit', $user->id)->with('success', 'User updated successfully');
    }

    // Delete a user
    public function destroy($id)
    {
        // Find the user
        $user = User::find($id);
    
        if ($user) {
            // Optionally, handle related orders
            // Delete the user
            $user->delete();
    
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }
    
        return redirect()->route('users.index')->with('error', 'User not found.');
    }
}
