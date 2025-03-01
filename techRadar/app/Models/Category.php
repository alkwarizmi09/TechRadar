<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory,HasUlids;

    public function Company(){
        return $this->belongsTo(Company::class);
    }

    public function technologies(){
        return $this->hasMany(Technology::class);
    }

}
