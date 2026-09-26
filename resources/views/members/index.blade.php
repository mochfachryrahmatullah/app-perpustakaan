@extends('layouts.app')
@section('title', 'Daftar Anggota')
@section('content')
    <h1>Daftar Anggota</h1>
    
    <a href="{{ route('members.create') }}" style="display:inline-block; margin-bottom:15px;">+ Tambah Anggota</a>

    <form action="{{ route('members.index') }}" method="GET" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari nama anggota..." value="{{ request('search') }}">
        <button type="submit">Cari</button>
    </form>

    @if(session('success'))
        <div style="color: green; margin-bottom: 15px;">{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->nim }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ ucfirst($member->status) }}</td>
                    <td>
                        <a href="{{ route('members.show', $member->id) }}">Detail</a> |
                        <a href="{{ route('members.edit', $member->id) }}">Edit</a> |
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus anggota ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Data anggota tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $members->appends(request()->query())->links() }}
    </div>
@endsection