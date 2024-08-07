<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;
use App\Http\Requests\StoreRatingRequest;
use App\Http\Requests\UpdateRatingRequest;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = Rating::all();
        return view('admin.ratings.index', [
            'ratings' => $ratings,
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:255'
        ]);

        // Create a new rating
        Rating::create([
            'rating' => $request->rating,
            'comment' => $request->comment,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Rating submitted successfully.');
    }
}
