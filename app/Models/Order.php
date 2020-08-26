<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'url',
        'qty',
        'color',
        'price',
        'size',
        'comment',
        'currency',
        'post_office',
        'post_office_number',
        'status_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_orders');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
