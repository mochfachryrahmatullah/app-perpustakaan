<?php
// File: app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function index()
    {
        return 'CategoryController@index';
    }

   public function create()
    {
        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
{
    $validated = $request->validated();

    return redirect()->route('categories.index')
        ->with('success', "Kategori \"{$validated['nama_kategori']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
}

    public function show(string $id)
    {
        return "CategoryController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "CategoryController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "CategoryController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "CategoryController@destroy, id: {$id}";
    }
}