<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'amount',
        'product_id',
        'currency'
    ];

    public function operations()
    {
        $this->hasMany(Operation::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
