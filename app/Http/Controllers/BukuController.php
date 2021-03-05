<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Buku::with('peminjaman')->get();
        return view('Buku.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Buku::all();
        return view('Buku.tambah',compact('data'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $buku)
    {
        //
        $aturan=[
            'judul'=>'required',
            'pengarang'=>'required',
            'tahun'=>'required'
        ];
        $pesan=[
            'required'=>'wajib di isi',
        ];
        $this->validate($buku,$aturan,$pesan);
        Buku::create($buku->all());
		return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $buk = Buku::find($id);
		return view('Buku.ubah', compact('buk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $buku,$id)
    {
        //
        $aturan=[
            'judul'=>'required',
            'pengarang'=>'required',
            'tahun'=>'required'
        ];
        $pesan=[
            'required'=>'wajib di isi',
        ];
        $this->validate($buku,$aturan,$pesan);
        $buk = $buku->all();
		// UPDATE tbl_mahasiwa SET nama_kolom=$mhs
		Buku::find($id)->update($buk);
		return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Buku::find($id)->delete();
		return redirect('buku');
    }
}
