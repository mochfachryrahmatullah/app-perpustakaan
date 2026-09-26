@extends('layouts.app')
@section('title', 'Edit Anggota')
@section('content')
    <h1>Edit Anggota</h1>
    <a href="{{ route('members.index') }}">&larr; Kembali</a>
    <br><br>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ old('nama', $member->nama) }}"><br>
        @error('nama') <span style="color:red">{{ $message }}</span><br> @enderror

        <label>NIM</label><br>
        <input type="text" name="nim" value="{{ old('nim', $member->nim) }}"><br>
        @error('nim') <span style="color:red">{{ $message }}</span><br> @enderror

        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email', $member->email) }}"><br>
        @error('email') <span style="color:red">{{ $message }}</span><br> @enderror

        <label>Nomor Telepon</label><br>
        <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $member->nomor_telepon) }}"><br>
        @error('nomor_telepon') <span style="color:red">{{ $message }}</span><br> @enderror

        <label>Alamat</label><br>
        <textarea name="alamat">{{ old('alamat', $member->alamat) }}</textarea><br>
        @error('alamat') <span style="color:red">{{ $message }}</span><br> @enderror

        <label>Status</label><br>
        <select name="status">
            <option value="aktif" {{ old('status', $member->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status', $member->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select><br>
        @error('status') <span style="color:red">{{ $message }}</span><br> @enderror
        <br>
        <button type="submit">Perbarui Data</button>
    </form>
@endsection