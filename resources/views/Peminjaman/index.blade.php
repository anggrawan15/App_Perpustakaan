@extends('Peminjaman.layout')

@section('title')
Data Peminjam
@endsection

@section('content')
<div class="my-3">
<a href="{{url('peminjaman/create')}}" class="btn btn-primary btn-md ">Tambah Data Pinjam</a>
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Buku</th>
            <th>Tanggal</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->anggota->nama }}</td>
            <td>{{ $value->buku->judul }}</td>
            <td>{{ $value->updated_at }}</td>

            <td>
            <div class="btn-group" role="group" aria-label="Basic example">

            <button type="button" class="btn btn-warning">
            <a href="{{ url('peminjaman/'.$value->id.'/edit') }}">Edit</a>
            </button>

            <form action="{{ url('peminjaman/'.$value->id) }}" method="POST">
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