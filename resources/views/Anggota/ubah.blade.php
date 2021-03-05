@extends('Anggota.layout')

@section('title')
Tambah Data Anggota
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
<a href="{{url('anggota')}}" class="btn btn-primary btn-md ">Data Anggota</a>
</div>
<hr>

<div class="py-3">
    <form method="post" action="{{url('anggota/'.$ang->id)}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" name="nama" class="form-control {{$errors->has('nama')?'is-invalid':''}}" value="{{$ang->nama}}" >
                @if($errors->has('nama'))
                <div class="infalid-feedback">
                    {{$errors->first('nama')}}
                </div>
                @endif
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control {{$errors->has('alamat')?'is-invalid':''}}">{{$ang->alamat}}</textarea>
            @if($errors->has('alamat'))
            <div class="infalid-feedback">
                {{$errors->first('alamat')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="title">No HP</label>
            <input type="text" name="no_hp" class="form-control {{$errors->has('no_hp')?'is-invalid':''}}" value="{{$ang->no_hp}}">
                @if($errors->has('no_hp'))
                <div class="infalid-feedback">
                    {{$errors->first('no_hp')}}
                </div>
                @endif
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
    </form>
</div>

@endsection