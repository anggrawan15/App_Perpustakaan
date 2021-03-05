<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    protected $table = 'tbl_anggota';
    protected $fillable = ['nama','alamat','no_hp'];

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
