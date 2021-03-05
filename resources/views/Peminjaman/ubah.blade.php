@extends('Peminjaman.layout')

@section('title')
Tambah Data Pinjam
@endsection

@section('content')
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<div class="my-3">
<a href="{{url('peminjaman')}}" class="btn btn-primary btn-md ">Data Peminjaman</a>
</div>
<hr>

<div class="py-3">
    <form method="post" action="{{url('peminjaman/'.$pin->id)}}">
        {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT">
        <div class="my-3">
        <div class="input-group">
            <select class="custom-select {{$errors->has('anggota_id')?'is-invalid':''}}" id="inputGroupSelect04" aria-label="Example select with button addon" name="anggota_id">
                <option selected>Pilih Anggota..</option>
                @foreach ($data2 as $i => $value)
                <option name="anggota_id" value="{{$pin->anggota_id}}">{{$value->nama}}</option>
                @endforeach 
            </select>
        </div>
        @if($errors->has('anggota_id'))
        <div class="infalid-feedback">
        {{$errors->first('anggota_id')}}
        </div>
        @endif
        </div>

        <div class="my-3">
        <div class="input-group">
            <select class="custom-select {{$errors->has('buku_id')?'is-invalid':''}}" id="inputGroupSelect04" aria-label="Example select with button addon" name="buku_id">
                <option selected>Pilih Buku</option>
                @foreach ($data1 as $i => $value)
                <option name="buku_id" value="{{$pin->buku_id}}">{{$value->judul}}</option>
                @endforeach 
            </select>
        </div>
        @if($errors->has('buku_id'))
        <div class="infalid-feedback">
        {{$errors->first('buku_id')}}
        </div>
        @endif
        </div>
        
        
        <button type="submit" class="btn btn-primary btn-block" >Ubah Data</button>
    </form>
</div>

@endsection