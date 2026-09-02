<?php
// File: app/Http/Controllers/MemberController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return 'MemberController@index';
    }

    public function create()
    {
        return 'MemberController@create';
    }

    public function store(Request $request)
    {
        return 'MemberController@store';
    }

// File: app/Http/Controllers/CategoryController.php
// Method show() TIDAK dibuat - categories tidak punya halaman detail tersendiri

    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}