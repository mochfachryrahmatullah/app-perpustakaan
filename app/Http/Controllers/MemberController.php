<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private array $members = [
        ['id' => 1, 'nama' => 'Budi Santoso', 'nim' => '24001001', 'email' => 'budi@example.com', 'nomor_telepon' => '081234567890', 'alamat' => 'Jl. Mawar No. 10', 'status' => 'aktif'],
        ['id' => 2, 'nama' => 'Siti Aminah', 'nim' => '24001002', 'email' => 'siti@example.com', 'nomor_telepon' => '081298765432', 'alamat' => 'Jl. Melati No. 5', 'status' => 'aktif'],
    ];

    public function index()
    {
        $members = $this->members;
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}