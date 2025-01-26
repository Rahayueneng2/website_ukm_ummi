@extends('layouts.index')

@section('content')
<div class="container mx-auto my-10">
    <h1 class="text-3xl font-extrabold text-center mb-6">Add New UKM</h1>
    <form action="{{ route('ukms.store') }}" method="POST" class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8" enctype="multipart/form-data">
        @csrf

        <!-- UKM Name -->
        <div class="mb-6">
            <label for="ukm_name" class="block text-lg font-medium text-gray-700">UKM Name:</label>
            <input type="text" id="ukm_name" name="ukm_name" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('ukm_name') }}" required>
            @error('ukm_name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Description -->
        <div class="mb-6">
            <label for="description" class="block text-lg font-medium text-gray-700">Description:</label>
            <textarea id="description" name="description" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4">{{ old('description') }}</textarea>
            @error('description')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- History -->
        <div class="mb-6">
            <label for="history" class="block text-lg font-medium text-gray-700">History:</label>
            <textarea id="history" name="history" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4">{{ old('history') }}</textarea>
            @error('history')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Social Media -->
        <div class="mb-6">
            <label for="social_media" class="block text-lg font-medium text-gray-700">Social Media:</label>
            <input type="text" id="social_media" name="social_media" class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('social_media') }}">
            @error('social_media')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Image UKM (File Input) -->
        <div class="flex flex-col items-center justify-center w-full mb-5">
  <!-- File Input -->
  <label for="image_ukm"
    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
    <div class="flex flex-col items-center justify-center pt-5 pb-6 relative">
      <div id="image-preview-container" class="mb-4 hidden w-full h-full bg-red-200 absolute z-50">
        <img id="image-preview" class=" h-full w-full object-cover rounded-md" alt="Image Preview" />
      </div>
      <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 20 16">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
      </svg>
      <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag
        and drop</p>
      <p class="text-xs text-gray-500">SVG, PNG, JPG, or GIF (MAX. 2MB)</p>
    </div>
    <input id="image_ukm" name="image_ukm" type="file" class="hidden" accept="image/*" />
  </label>
</div>
@error('image_ukm')
<span class="text-red-500 text-sm">{{ $message }}</span>
@enderror

        <!-- Submit Button -->
        <button type="submit" class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Add UKM
        </button>
    </form>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('image_ukm').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('image-preview-container');
    const previewImage = document.getElementById('image-preview');

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.classList.remove('hidden');
        };

        reader.readAsDataURL(file);
    } else {
        previewContainer.classList.add('hidden');
        previewImage.src = '';
    }
});
});
</script>