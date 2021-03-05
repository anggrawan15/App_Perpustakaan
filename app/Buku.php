<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = 'tbl_buku';
    protected $fillable = ['judul','pengarang','tahun'];

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
