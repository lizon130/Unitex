<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_name',
        'category_id',
        'category_name',
        'product_count',
        'slug',
    ];

    // public function categories()
    // {
    //     return $this->belongsTo(SubCategory::class, 'parent_id');
    // }
}
