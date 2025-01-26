@extends('layouts.index')

@section('content')

    <form 
        action="{{ route('members.store') }}" 
        method="POST" 
        class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8" 
        enctype="multipart/form-data" 
        onsubmit="return showConfirmation()"
    >

    <div class="container mx-auto my-10">
    <h1 class="text-3xl font-extrabold text-center mb-6">Add New Member</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        @csrf

        <!-- UKM -->
        <div class="mb-6">
            <label for="ukm_id" class="block text-lg font-medium text-gray-700">UKM:</label>
            <select id="ukm_id" name="ukm_id" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black bg-white" required>
                @foreach($ukms as $ukm)
                    <option value="{{ $ukm->ukm_id }}" data-name="{{ $ukm->ukm_name }}">{{ $ukm->ukm_name }}</option>
                @endforeach
            </select>
            @error('ukm_id')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Member Name -->
        <div class="mb-6">
            <label for="name" class="block text-lg font-medium text-gray-700">Member Name:</label>
            <input type="text" id="name" name="name" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
            @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Program Studi -->
        <div class="mb-6">
            <label for="prodi_id" class="block text-lg font-medium text-gray-700">Program Studi:</label>
            <select id="prodi_id" name="prodi_id" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled {{ old('prodi_id') ? '' : 'selected' }}>Pilih Program Studi</option>
                @foreach ($prodis as $prodi)
                    <option value="{{ $prodi->prodi_id }}" {{ old('prodi_id') == $prodi->prodi_id ? 'selected' : '' }}>{{ $prodi->prodi_name }}</option>
                @endforeach
            </select>
            @error('prodi_id')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Dropdown Semester -->
        <div class="mb-6">
            <label for="semester_id" class="block text-lg font-medium text-gray-700">Semester:</label>
            <select id="semester_id" name="semester_id" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled {{ old('semester_id') ? '' : 'selected' }}>Pilih Semester</option>
                @foreach ($semesters as $semester)
                    <option value="{{ $semester->semester_id }}" {{ old('semester_id') == $semester->semester_id ? 'selected' : '' }}>
                        Semester {{ $semester->semester_number }}
                    </option>
                @endforeach
            </select>
            @error('semester_id')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Add Member
        </button>
    </form>
</div>

<script>
    function showConfirmation() {
        const ukmSelect = document.getElementById('ukm_id');
        const selectedOption = ukmSelect.options[ukmSelect.selectedIndex];
        const ukmName = selectedOption.dataset.name;

        const userConfirmed = confirm(`Apakah Anda yakin akan daftar di UKM ${ukmName}?`);
        return userConfirmed; // Jika "true", form akan dikirim.
    }
</script>


@endsection
