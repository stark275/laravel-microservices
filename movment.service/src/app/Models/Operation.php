<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'motif',
        'tva',
        'quantity',
        'price_id',
        'session_id',
        'other_price'
    ];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
