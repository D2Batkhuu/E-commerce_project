<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',            // <-- Add 'title' here
        'description',      // <-- Make sure these are included as well
        'price',
        'quantity',
        'category_id',      // <-- Remember to add category_id instead of category
        'image',
    ];
    public function category()
{
    return $this->belongsTo(Category::class);
}
}
