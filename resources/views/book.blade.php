@extends('layouts.lay3')

@section('title')
Data Buku Yang Ada
@endsection

@section('content')
<hr>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->judul }}</td>
            <td>{{ $value->pengarang }}</td>
            <td>{{ $value->tahun }}</td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection