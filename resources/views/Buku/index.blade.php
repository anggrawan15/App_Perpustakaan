@extends('Buku.layout')

@section('title')
Data Buku
@endsection

@section('content')
<div class="my-3">
<a href="{{url('buku/create')}}" class="btn btn-primary btn-md ">Tambah Data Buku</a>
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->judul }}</td>
            <td>{{ $value->pengarang }}</td>
            <td>{{ $value->tahun }}</td>

            <td>
            <div class="btn-group" role="group" aria-label="Basic example">

            <button type="button" class="btn btn-warning">
            <a href="{{ url('buku/'.$value->id.'/edit') }}">Edit</a>
            </button>

            <form action="{{ url('buku/'.$value->id) }}" method="POST">
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