<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $guarded = ['id'];
    public function userdepartemen()
    {
        return $this->belongsto(departemen::class,'id_departemen');
    }
    public function userpemesanan()
    {
        return $this->hasMany(pemesanan::class,'id_user_yang_pinjam','id');
    }
    public function userpemesanandeal1()
    {
        return $this->hasmany(pemesanan::class,'id_user_persetujuan_1','id');
    }
    public function userpemesanandeal2()
    {
        return $this->hasmany(pemesanan::class,'id_user_persetujuan_2','id');
    }
}
