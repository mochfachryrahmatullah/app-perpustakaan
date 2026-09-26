@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>
    <p><a href="{{ route('books.index') }}">&larr; Kembali ke daftar buku</a></p>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label for="judul">Judul Buku</label><br>
        <input type="text" name="judul" id="judul" value="{{ old('judul') }}"><br>
        @error('judul') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
        <br>

        <label for="penulis">Penulis</label><br>
        <input type="text" name="penulis" id="penulis" value="{{ old('penulis') }}"><br>
        @error('penulis') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
        <br>

        <label for="penerbit">Penerbit</label><br>
        <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit') }}"><br>
        @error('penerbit') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
        <br>

        <label for="tahun_terbit">Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit') }}"><br>
        @error('tahun_terbit') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
        <br>

        <label for="isbn">ISBN (Opsional)</label><br>
        <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}"><br>
        @error('isbn') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
        <br>

        <label for="stok">Stok</label><br>
        <input type="number" name="stok" id="stok" value="{{ old('stok') }}"><br>
        @error('stok') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
        <br>

        <label for="category_id">Kategori</label><br>
        <select name="category_id" id="category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select><br>
        @error('category_id') <div style="color: red; font-size: 14px;">{{ $message }}</div> @enderror
        <br>

        <button type="submit" style="margin-top: 10px; padding: 8px 16px;">Simpan Buku</button>
    </form>
@endsection