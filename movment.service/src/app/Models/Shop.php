<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'type',
        'account_id'
    ];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function getSessions()
    {
        return $this->sessions;
    }
}
