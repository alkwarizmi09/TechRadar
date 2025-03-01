<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory,HasUlids;

    protected $guarded = [];

    /* pivot role_permissions */
    public function companies(){
        return $this->belongsToMany(Company::class,"role_permissions")->withPivot('role_id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class,"role_permissions")->withPivot('company_id');
    }


}
