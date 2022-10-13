<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type' ,
        'name',
        'model',
        'brand'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
}
