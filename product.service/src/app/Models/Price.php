<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getAmount()
    {
        return $this->amount;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
