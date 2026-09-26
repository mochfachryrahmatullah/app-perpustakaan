@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku</h1>
    <p><a href="{{ route('books.index') }}">&larr; Kembali</a></p>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul Buku</label><br>
        <input type="text" name="judul" value="{{ old('judul', $book->judul) }}"><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="{{ old('penulis', $book->penulis) }}"><br><br>

        <label>Penerbit</label><br>
        <input type="text" name="penerbit" value="{{ old('penerbit', $book->penerbit) }}"><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}"><br><br>

        <label>ISBN</label><br>
        <input type="text" name="isbn" value="{{ old('isbn', $book->isbn) }}"><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="{{ old('stok', $book->stok) }}"><br><br>

        <label>Kategori</label><br>
        <select name="category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Perbarui Buku</button>
    </form>
@endsection