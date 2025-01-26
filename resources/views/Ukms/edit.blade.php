@extends('layouts.index')

@section('content')
<div class="container mx-auto my-10">
    <h1 class="text-3xl font-extrabold text-center mb-6">Edit UKM</h1>
    <form action="{{ route('ukms.update', $ukm->ukm_id) }}" method="POST" class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- UKM Name -->
        <div class="mb-6">
            <label for="ukm_name" class="block text-lg font-medium text-gray-700">UKM Name:</label>
            <input type="text" id="ukm_name" name="ukm_name" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('ukm_name', $ukm->ukm_name) }}" required>
            @error('ukm_name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Description -->
        <div class="mb-6">
            <label for="description" class="block text-lg font-medium text-gray-700">Description:</label>
            <textarea id="description" name="description" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4">{{ old('description', $ukm->description) }}</textarea>
            @error('description')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- History -->
        <div class="mb-6">
            <label for="history" class="block text-lg font-medium text-gray-700">History:</label>
            <textarea id="history" name="history" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4">{{ old('history', $ukm->history) }}</textarea>
            @error('history')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Social Media -->
        <div class="mb-6">
            <label for="social_media" class="block text-lg font-medium text-gray-700">Social Media:</label>
            <input type="text" id="social_media" name="social_media" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('social_media', $ukm->social_media) }}">
            @error('social_media')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

       <!-- Image UKM (File Input) -->
    <div class="mb-4">
        <label for="image_ukm" class="block text-sm font-medium text-gray-700">Image UKM</label>
        <div class="mt-2">
            <!-- Preview gambar -->
            <img id="image-preview" class="h-full w-full object-cover rounded-md" alt="Image UKM Preview"
                src="{{ $ukm->image_ukm ? asset('storage/' . $ukm->image_ukm) : '' }}" />
        </div>
        <input type="file" name="image_ukm" id="image_ukm" class="mt-2 block w-full text-sm">
    </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Update UKM
        </button>
    </form>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('image_ukm');
    const previewContainer = document.getElementById('image-preview-container');
    const previewImage = document.getElementById('image-preview');

    imageInput.addEventListener('change', function (event) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewContainer.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            previewImage.src = '';
            previewContainer.classList.add('hidden');
        }
    });
});

</script>
