<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'category_id',
        'is_active',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function cart_items(){
        return $this->hasMany(CartItem::class);
    }
    //
}
