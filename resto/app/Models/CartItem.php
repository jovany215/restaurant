<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'session_id',
        'product_id',
        'quantity',
        'extras',
        'notes',
        'unite_price',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    //
}
