<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
    ];

    protected $appends = [
        'total',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function getTotalAttribute()
    {
        return $this->products()->withPivot('quantity')->get()->sum(function ($product) {
            return $product->pivot->quantity * $product->price;
        });
    }
}
