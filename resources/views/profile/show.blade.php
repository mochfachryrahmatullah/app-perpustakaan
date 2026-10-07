@extends('layouts.app')

@section('content')
<div style="max-width: 500px; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <h2>Profil Petugas</h2>

    @if (session('success'))
        <div style="background-color: #d1e7dd; color: #0f5132; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Detail User --}}
    <div style="background: #f8f9fa; padding: 15px; border-radius: 6px; margin-bottom: 25px;">
        <p style="margin: 5px 0;"><strong>Nama:</strong> {{ $user->name }}</p>
        <p style="margin: 5px 0;"><strong>Email:</strong> {{ $user->email }}</p>
        <p style="margin: 5px 0;"><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
    </div>

    <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">

    <h3>Ganti Password</h3>

    <form action="{{ route('profile.password.update') }}" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="current_password" style="display: block; margin-bottom: 5px; font-weight: bold;">Password Lama</label>
            <input type="password" name="current_password" id="current_password" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
            @error('current_password')
                <div style="color: red; font-size: 14px; margin-top: 4px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="password" style="display: block; margin-bottom: 5px; font-weight: bold;">Password Baru</label>
            <input type="password" name="password" id="password" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
            @error('password')
                <div style="color: red; font-size: 14px; margin-top: 4px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="password_confirmation" style="display: block; margin-bottom: 5px; font-weight: bold;">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <button type="submit" class="btn" style="background: #2563eb; color: white; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;">
            Ganti Password
        </button>
    </form>
</div>
@endsection