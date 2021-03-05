@extends('Anggota.layout')

@section('title')
Data Anggota
@endsection

@section('content')
<div class="my-3">
<a href="{{url('anggota/create')}}" class="btn btn-primary btn-md ">Tambah Data Anggota</a>
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->no_hp }}</td>

            <td>
            <div class="btn-group" role="group" aria-label="Basic example">

            <button type="button" class="btn btn-warning">
            <a href="{{ url('anggota/'.$value->id.'/edit') }}">Edit</a>
            </button>

            <form action="{{ url('anggota/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
            </form>
            </div>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

@endsection