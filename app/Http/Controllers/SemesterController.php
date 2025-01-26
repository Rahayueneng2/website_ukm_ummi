<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    // Menampilkan daftar semester
    public function index()
    {
        $semesters = Semester::all(); // Ambil semua data semester
        return view('semesters.index', compact('semesters'));
    }

    // Menampilkan form untuk menambahkan semester baru
    public function create()
    {
        return view('semesters.create');
    }

    // Menyimpan semester baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'semester_number' => 'required|integer|min:1|unique:semesters,semester_number',
        ]);

        Semester::create([
            'semester_number' => $request->semester_number,
        ]);

        return redirect()->route('semesters.index')->with('success', 'Semester berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit semester
    public function edit($id)
    {
        $semester = Semester::findOrFail($id); // Cari Semester berdasarkan ID
        return view('semesters.edit', compact('semester'));
    }

    // Memperbarui data semester
    public function update(Request $request, $id)
    {
        $semester = Semester::findOrFail($id);

        $request->validate([
            'semester_number' => 'required|integer|min:1|unique:semesters,semester_number,' . $semester->semester_id . ',semester_id',
        ]);

        $semester->update([
            'semester_number' => $request->semester_number,
        ]);

        return redirect()->route('semesters.index')->with('success', 'Semester berhasil diperbarui.');
    }

    // Menghapus semester
    public function destroy($id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();

        return redirect()->route('semesters.index')->with('success', 'Semester berhasil dihapus.');
    }
}
