<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $filable = [
        'name',
        'slug'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }
}
