@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h1>Detail Buku</h1>
    <p><a href="{{ route('books.index') }}">&larr; Kembali ke daftar buku</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>ID</th><td>{{ $book->id }}</td></tr>
        <tr><th>Judul</th><td>{{ $book->judul }}</td></tr>
        <tr><th>Penulis</th><td>{{ $book->penulis }}</td></tr>
        <tr><th>Penerbit</th><td>{{ $book->penerbit }}</td></tr>
        <tr><th>Tahun Terbit</th><td>{{ $book->tahun_terbit }}</td></tr>
        <tr><th>ISBN</th><td>{{ $book->isbn ?? '-' }}</td></tr>
        <tr><th>Stok</th><td>{{ $book->stok }}</td></tr>
        <tr><th>Kategori</th><td>{{ $book['category']['nama_kategori'] }}</td></tr>
    </table>
@endsection