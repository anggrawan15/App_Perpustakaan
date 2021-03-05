<?php

namespace App\Http\Controllers;

use App\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Anggota::all();
        return view('Anggota.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kosa=Kos::all();
        $data=Anggota::all();
        return view('Anggota.tambah',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $anggota)
    {
        //
        $aturan=[
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required'
        ];
        $pesan=[
            'required'=>'wajib di isi',
        ];
        $this->validate($anggota,$aturan,$pesan);
        Anggota::create($anggota->all());
		return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ang = Anggota::find($id);
		return view('Anggota.ubah', compact('ang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $anggota, $id)
    {
        
        //
        $aturan=[
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required'
        ];
        $pesan=[
            'required'=>'wajib di isi',
        ];
        $this->validate($anggota,$aturan,$pesan);
        $ang = $anggota->all();
		// UPDATE tbl_mahasiwa SET nama_kolom=$mhs
		Anggota::find($id)->update($ang);
		return redirect('anggota');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Anggota::find($id)->delete();
		return redirect('anggota');
    }
}
