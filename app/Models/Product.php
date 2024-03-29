<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function types()
    {
        return $this->belongsTo(Type::class, 'type');
    }

    public function product_order()
    {
        return $this->belongsTo(ProductOrder::class, 'id');
    }
}
