<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function departemenuser()
    {
        return $this->hasMany(User::class,'id_departemen','id');
    }
}
