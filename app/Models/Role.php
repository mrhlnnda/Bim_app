<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function admin()
    {
        return $this->hasMany('App\Admin');
    }
    public function dosen()
    {
        return $this->hasMany('App\Dosen');
    }
    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswa');
    }       
}
