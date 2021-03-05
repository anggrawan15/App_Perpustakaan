@extends('Buku.layout')

@section('title')
Tambah Data Buku
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
<a href="{{url('buku')}}" class="btn btn-primary btn-md ">Data Buku</a>
</div>
<hr>

<div class="py-3">
    <form method="post" action="{{url('buku')}}">
        {{csrf_field()}}
        
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="judul" class="form-control {{$errors->has('judul')?'is-invalid':''}}" value="{{old('judul')}}">
                @if($errors->has('judul'))
                <div class="infalid-feedback">
                    {{$errors->first('judul')}}
                </div>
                @endif
        </div>
        
        <div class="form-group">
            <label for="title">Pengarang</label>
            <input type="text" name="pengarang" class="form-control {{$errors->has('pengarang')?'is-invalid':''}}" value="{{old('pengarang')}}">
                @if($errors->has('pengarang'))
                <div class="infalid-feedback">
                    {{$errors->first('pengarang')}}
                </div>
                @endif
        </div>
        
        <div class="form-group">
            <label for="title">Tahun</label>
            <input type="text" name="tahun" class="form-control {{$errors->has('tahun')?'is-invalid':''}}" value="{{old('tahun')}}">
                @if($errors->has('tahun'))
                <div class="infalid-feedback">
                    {{$errors->first('tahun')}}
                </div>
                @endif
        </div>
        
        <button type="submit" class="btn btn-primary btn-block" >Tambah Data</button>
    </form>
</div>

@endsection