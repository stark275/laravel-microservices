<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    protected $fillable = [
        'name',
        'type',
        'account_id'
    ];

    use HasFactory;
}
