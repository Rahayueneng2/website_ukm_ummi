<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ukms = Ukm::all();
        return view('ukms.index', compact('ukms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ukms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('isAdmin');

        $validated = $request->validate([
            'ukm_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'history' => 'nullable|string',
            'social_media' => 'nullable|string',
            'image_ukm' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image_ukm')) {
            $file = $request->file('image_ukm');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('/ukms', $filename);
            $validated['image_ukm'] = $filePath;
        }        

        Ukm::create($validated);

        return redirect()->route('ukms.index')->with('success', 'UKM berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ukm = Ukm::findOrFail($id);
        return view('ukms.show', compact('ukm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->authorize('isAdmin');

        $ukm = Ukm::findOrFail($id);
        return view('ukms.edit', compact('ukm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->authorize('isAdmin'); 

        $validated = $request->validate([
            'ukm_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'history' => 'nullable|string',
            'social_media' => 'nullable|string',
            'image_ukm' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $ukm = Ukm::findOrFail($id);

        if ($request->hasFile('image_ukm')) {
            $validated['image_ukm'] = $request->file('image_ukm')->store('ukms', 'public');
            // Hapus gambar lama setelah penyimpanan berhasil
            if ($ukm->image_ukm && Storage::disk('public')->exists($ukm->image_ukm)) {
                Storage::disk('public')->delete($ukm->image_ukm);
            }
        }
        

        $ukm->update($validated);

        return redirect()->route('ukms.index')->with('success', 'UKM berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');
        
        $ukm = Ukm::findOrFail($id);

        // Hapus gambar dari penyimpanan jika ada
        if ($ukm->image_ukm && Storage::disk('public')->exists($ukm->image_ukm)) {
            Storage::disk('public')->delete($ukm->image_ukm);
        }
        $ukm->delete();

        return redirect()->route('ukms.index')->with('success', 'UKM berhasil dihapus.');
    }

    public function __construct()
    {
       $this->middleware(['auth'])->except(['index', 'show']);
       $this->middleware(['auth', 'isAdmin'])->only(['store', 'edit', 'update', 'destroy']);
    }
}
