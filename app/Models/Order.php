<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'user_id',
        'number',
        'status',
        'payment_method',
        'payment_status',
        'shipping_address',
        'billing_address',
        'tracking_no',
        'total_price'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function generateOrderNumber()
    {
        $lastOrder = self::orderBy('id', 'desc')->first();

        if (!$lastOrder) {
            return 5000;
        }

        return $lastOrder->number + 1;
    }

}
