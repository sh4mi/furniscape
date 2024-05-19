<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'category_id', 'quantity', 'sku', 'dimensions', 'material', 'weight', 'is_featured', 'is_available', 'price', 'discount_price',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
