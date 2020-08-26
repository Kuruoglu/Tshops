<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $filable = [
        'name', 'slug'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
