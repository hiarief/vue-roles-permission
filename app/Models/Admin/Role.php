<?php

namespace App\Models\Admin;

use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    protected $fillable = [
        'name',
        'guard_name',
        'updated_at',
        'created_at',
    ];
}