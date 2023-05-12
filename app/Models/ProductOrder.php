<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function products()
    {
        return $this->hasMany(Menu::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
