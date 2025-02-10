<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory,HasUlids;
    protected $guarded = [];


    //pivot company_users
    public function users(){
        return $this->belongsToMany(User::class,"company_users")->withPivot(['status','role_id','id'])->withTimestamps();
    }

    //pivot role_permissions
    public function roles(){
        return $this->belongsToMany(Role::class,"role_permissions")->withPivot('permission_id')->withTimestamps();
    }

    //menghubungkan table company dan category
    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function technologies(){
        return $this->hasMany(Technology::class);
    }


}
