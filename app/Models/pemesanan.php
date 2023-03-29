<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pemesananuser()
    {
        return $this->belongsto(User::class,'id_user_yang_pinjam');
    }
    public function pemesananuserdeal1()
    {
        return $this->belongsto(User::class,'id_user_persetujuan_1');
    }
    public function pemesananuserdeal2()
    {
        return $this->belongsto(User::class,'id_user_persetujuan_2');
    }
    public function pemesanankendaraan()
    {
        return $this->belongsto(kendaraan::class,'id_kendaraan');
    }
}
