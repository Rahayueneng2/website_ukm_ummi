<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    // Menampilkan daftar program studi
    public function index()
    {
        $prodis = Prodi::all(); // Ambil semua data Prodi dari database
        return view('prodis.index', compact('prodis'));
    }

    // Menampilkan form untuk menambahkan program studi baru
    public function create()
    {
        return view('prodis.create');
    }

    // Menyimpan program studi baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'prodi_name' => 'required|string|max:255|unique:prodis,prodi_name',
        ]);

        Prodi::create([
            'prodi_name' => $request->prodi_name,
        ]);

        return redirect()->route('prodis.index')->with('success', 'Program Studi berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit program studi
    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id); // Cari Prodi berdasarkan ID
        return view('prodis.edit', compact('prodi'));
    }

    // Memperbarui data program studi
    public function update(Request $request, $id)
    {
        $prodi = Prodi::findOrFail($id);

        $request->validate([
            'prodi_name' => 'required|string|max:255|unique:prodis,prodi_name,' . $prodi->prodi_id . ',prodi_id',
        ]);

        $prodi->update([
            'prodi_name' => $request->prodi_name,
        ]);

        return redirect()->route('prodis.index')->with('success', 'Program Studi berhasil diperbarui.');
    }

    // Menghapus program studi
    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodis.index')->with('success', 'Program Studi berhasil dihapus.');
    }
}
