<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    // Menampilkan daftar semua foto
    public function index()
    {
        return view('photos.index');
    }

    // Menampilkan form untuk membuat foto baru
    public function create()
    {
        return view('photos.create');
    }

    // Menyimpan foto baru
    public function store(Request $request)
    {
        // Validasi dan proses penyimpanan foto
    }

    // Menampilkan foto berdasarkan ID
    public function show($id)
    {
        return view('photos.show', compact('id'));
    }

    // Menampilkan form untuk mengedit foto berdasarkan ID
    public function edit($id)
    {
        return view('photos.edit', compact('id'));
    }

    // Memperbarui foto berda-sarkan ID
    public function update(Request $request, $id)
    {
        // Validasi dan proses pembaruan foto
    }

    // Menghapus foto berdasarkan ID
    public function destroy($id)
    {
        // Proses penghapusan foto
    }
}