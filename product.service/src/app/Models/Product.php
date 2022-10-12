<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['prices'];

    public function getPrices()
    {
        return $this->prices;
    }

    public function getCurrentPrice()
    {
        return $this->prices()->where('current', 1)->first();
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
