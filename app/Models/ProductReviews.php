<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'product_id',
        'rating',
        'comment',
    ];
}
