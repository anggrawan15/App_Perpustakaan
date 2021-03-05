<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Anggota;
use App\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Peminjaman::with('buku','anggota')->get();
        return view('Peminjaman.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Peminjaman::all();
        $data1=Buku::all();
        $data2=Anggota::all();
        return view('Peminjaman.tambah',compact('data','data1','data2'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $peminjaman)
    {
        //
        $aturan=[
            'buku_id'=>'numeric',
            'anggota_id'=>'numeric'
        ];
        $pesan=[
            'numeric'=>'wajib di isi'
        ];
        $this->validate($peminjaman,$aturan,$pesan);
        Peminjaman::create($peminjaman->all());
		return redirect('peminjaman');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pin =Peminjaman::find($id);
        $data1=Buku::all();
        $data2=Anggota::all();
		return view('Peminjaman.ubah', compact('pin','data1','data2'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $peminjaman,$id)
    {
        //
        $aturan=[
            'buku_id'=>'numeric',
            'anggota_id'=>'numeric'
        ];
        $pesan=[
            'numeric'=>'wajib di isi'
        ];
        $this->validate($peminjaman,$aturan,$pesan);
        
        $pin = $peminjaman->all();
		// UPDATE tbl_mahasiwa SET nama_kolom=$mhs
		Peminjaman::find($id)->update($pin);
		return redirect('peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Peminjaman::find($id)->delete();
		return redirect('peminjaman');
    }
}
