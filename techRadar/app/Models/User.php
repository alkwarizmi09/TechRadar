<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function companies(){
        return $this->belongsToMany(Company::class,"company_users")->withPivot(['role_id','status','id'])->withTimestamps();
    }

    public function technologies(){
        return $this->hasMany(Technology::class);
    }

    public function notifications()
    {
        return $this->hasMany(UserNotifications::class);
    }

    // Relasi ke tabel notifications untuk melacak notifikasi yang telah dibaca
    public function unreadNotifications()
    {
        return $this->hasMany(UserNotifications::class)->whereNull('read_at');
    }
}
