<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Prodi;
use App\Models\Semester;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $members = Member::with('ukm', 'prodi', 'semester')->get();

        // Statistik UKM dengan jumlah anggota
        $ukmStats = DB::table('members')
            ->join('ukms', 'members.ukm_id', '=', 'ukms.ukm_id')
            ->select('ukms.ukm_name', DB::raw('count(members.member_id) as total'))
            ->groupBy('ukms.ukm_name')
            ->get();

        $chartLabels = $ukmStats->pluck('ukm_name');
        $chartData = $ukmStats->pluck('total');

        return view('members.index', compact('members', 'ukmStats', 'chartLabels', 'chartData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ukms = Ukm::all();
        $prodis = Prodi::all();
        $semesters = Semester::all();

        return view('Members.create', compact('ukms', 'prodis', 'semesters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'ukm_id' => 'required|exists:ukms,ukm_id',
        'name' => 'required|string|max:255',
        'prodi_id' => 'required|exists:prodis,prodi_id',
        'semester_id' => 'required|exists:semesters,semester_id',
    ]);

    Member::create($validated);

    return redirect()->route('ukms.index')->with('success', 'Member berhasil ditambahkan.');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        $ukms = Ukm::all();
        $prodis = Prodi::all();
        $semesters = Semester::all();

        return view('Members.edit', compact('member', 'ukms', 'prodis', 'semesters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ukm_id' => 'required|exists:ukms,ukm_id',
            'name' => 'required|string|max:255',
            'prodi_id' => 'required|exists:prodis,prodi_id',
            'semester_id' => 'required|exists:semesters,semester_id',
        ]);

        // Update data member
        $member = Member::findOrFail($id);
        $member->update($request->only(['ukm_id', 'name', 'prodi_id', 'semester_id']));

        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $member = Member::with('ukm', 'prodi', 'semester')->findOrFail($id);

        return view('Members.show', compact('member'));
    }

}
