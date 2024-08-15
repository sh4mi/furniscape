<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug']; // Add 'name' to the $fillable array
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = static::generateUniqueSlug($category->name);
        });
    }

    protected static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::where('slug', $slug)->count();

        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1); // Append a number to make it unique
        }

        return $slug;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
