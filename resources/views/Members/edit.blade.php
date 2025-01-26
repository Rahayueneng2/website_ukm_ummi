@extends('layouts.index')

@section('content')
<div class="container mx-auto my-10">
    <h1 class="text-3xl font-extrabold text-center mb-6">Edit Member</h1>
    <form action="{{ route('members.update', $member->member_id) }}" method="POST" class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Add this to specify the PUT method for updates -->

        <!-- UKM -->
        <div class="mb-6">
            <label for="ukm_id" class="block text-lg font-medium text-gray-700">UKM:</label>
            <select id="ukm_id" name="ukm_id" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black bg-white !text-black !bg-white" required>
                @foreach($ukms as $ukm)
                    <option value="{{ $ukm->ukm_id }}" class="!text-black !bg-white" {{ $member->ukm_id == $ukm->ukm_id ? 'selected' : '' }}>
                        {{ $ukm->ukm_name }}
                    </option>
                @endforeach
            </select>
            @error('ukm_id')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Member Name -->
        <div class="mb-6">
            <label for="name" class="block text-lg font-medium text-gray-700">Member Name:</label>
            <input type="text" id="name" name="name" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name', $member->name) }}" required>
            @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Program Studi -->
        <div class="mb-6">
            <label for="prodi_id" class="block text-lg font-medium text-gray-700">Program Studi:</label>
            <select id="prodi_id" name="prodi_id" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled {{ old('prodi_id', $member->prodi_id) ? '' : 'selected' }}>Pilih Program Studi</option>
                @if($prodis->isEmpty())
                    <option value="">Tidak ada program studi tersedia</option>
                @else
                    @foreach ($prodis as $prodi)
                        <option value="{{ $prodi->prodi_id }}" {{ old('prodi_id', $member->prodi_id) == $prodi->prodi_id ? 'selected' : '' }}>{{ $prodi->prodi_name }}</option>
                    @endforeach
                @endif
            </select>
            @error('prodi_id')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Dropdown Semester -->
        <div class="mb-6">
            <label for="semester_id" class="block text-lg font-medium text-gray-700">Semester:</label>
            <select id="semester_id" name="semester_id" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled {{ old('semester_id', $member->semester_id) ? '' : 'selected' }}>Pilih Semester</option>
                @if($semesters->isEmpty())
                    <option value="">Tidak ada semester tersedia</option>
                @else
                    @foreach ($semesters as $semester)
                        <option value="{{ $semester->semester_id }}" {{ old('semester_id', $member->semester_id) == $semester->semester_id ? 'selected' : '' }}>
                            Semester {{ $semester->semester_number }}
                        </option>
                    @endforeach
                @endif
            </select>
            @error('semester_id')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Update Member
        </button>
    </form>
</div>
@endsection
