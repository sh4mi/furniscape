<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]
        );
    }
    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($request->only(['name', 'slug']));

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        // Get the updated name from the request
        $updatedName = $request->name;

        // Generate a new slug based on the updated name
        $updatedSlug = Str::slug($updatedName);

        // Check if the generated slug is unique among other categories
        if (Category::where('slug', $updatedSlug)->where('id', '<>', $category->id)->exists()) {
            // If the slug is not unique, append a unique suffix to make it unique
            $updatedSlug .= '-' . uniqid();
        }

        // Update the category with the new name and slug
        $category->update([
            'name' => $updatedName,
            'slug' => $updatedSlug,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        }
        public function destroy(Category $category)
        {
            $category->delete();

            return response()->json(['message' => 'Category deleted successfully']);
        }
}
