<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory,HasUlids;
    protected $guarded = [];

    /* pivot company_users */
    public function users(){
        return $this->belongsToMany(User::class,"company_users")->withPivot(['status','company_id','id']);
    }

    public function companies(){
        return $this->belongsToMany(Company::class,"company_users")->withPivot(['status','user_id','id']);
    }

    //================================================

    /* pivot role_permissions */
    public function companiesPermissions(){
        return $this->belongsToMany(Company::class,"role_permissions")->withPivot('permission_id');
    }

}
