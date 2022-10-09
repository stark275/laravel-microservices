<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'agent_id'
    ];

    public function getOperations()
    {
        return $this->operations;
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }

}
