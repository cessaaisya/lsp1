<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_category_id',
        'product_name',
        'description',
        'price',
        'stok_quantity',
        'image1_url',
        'image2_url',
        'image3_url',
        'image4_url',
        'image5_url',
    ]; 

    public function productCategories()
    {
        return $this->belongsTo(ProductCategories::class, 'product_category_id');
    }

    protected $primaryKey = 'id';
        public function products()
        {
            return $this->belongsTo(Products::class, 'product_category_id',
            'product_name',
            'description',
            'price',
            'stok_quantity',
            'image1_url',
            'image2_url',
            'image3_url',
            'image4_url',
            'image5_url',);
        }

}