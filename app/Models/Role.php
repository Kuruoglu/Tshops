<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $filable = [
        'name',
        'slug'
    ];

    public $timestamps = false;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

}
