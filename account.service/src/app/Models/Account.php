<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getUsers()
    {
        return $this->users;
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

}

