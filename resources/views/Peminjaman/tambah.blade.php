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
    <form method="post" action="{{url('peminjaman')}}">
        {{csrf_field()}}

       
        <div class="my-3">
        <div class="input-group">
            <select class="custom-select {{$errors->has('anggota_id')?'is-invalid':''}}" id="inputGroupSelect04" aria-label="Example select with button addon" name="anggota_id">
                <option selected>Pilih Anggota..</option>
                @foreach ($data2 as $i => $value)
                <option name="anggota_id" value="{{$value->id}}">{{$value->nama}}</option>
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
                <option name="buku_id" value="{{$value->id}}">{{$value->judul}}</option>
                @endforeach 
            </select>
        </div>
        @if($errors->has('buku_id'))
        <div class="infalid-feedback">
        {{$errors->first('buku_id')}}
        </div>
        @endif
        </div>
        
        
        <button type="submit" class="btn btn-primary btn-block" >Tambah Data</button>
    </form>
</div>

@endsection