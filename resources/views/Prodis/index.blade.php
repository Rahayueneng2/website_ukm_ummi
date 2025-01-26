@extends('layouts.index')

@section('content')
<div class="container mx-auto my-10">
    <h1 class="text-2xl font-bold mb-6">Daftar Semester</h1>
    <a href="{{ route('semesters.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 mb-4 inline-block">
        Tambah Semester
    </a>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse ($semesters as $semester)
            <div class="border rounded-lg shadow p-4">
                <h2 class="text-lg font-semibold">Semester {{ $semester->semester_number }}</h2>
                <p>ID: {{ $semester->semester_id }}</p>
                <p>Program Studi: {{ $semester->prodi->prodi_name ?? 'Tidak ada' }}</p>
            </div>
        @empty
            <p>Tidak ada semester yang tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
