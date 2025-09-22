<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'price', 'quantity', 'image', 'discription'];

    // Define the relationship with the category model (AddCategory)
    public function categoryRelation()
    {
        return $this->belongsTo(AddCategory::class, 'category');
    }
}

