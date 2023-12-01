<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'slug',
        'subcategory_count',
        'product_count',
    ];

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
}
