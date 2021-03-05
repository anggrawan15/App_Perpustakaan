<?php

namespace App;
use App\Buku;
use App\anggota;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table = 'tbl_peminjaman';
    protected $fillable = ['buku_id','anggota_id'];


    public function buku(){
        return $this->belongsTo(Buku::class);
    }

    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }


}
