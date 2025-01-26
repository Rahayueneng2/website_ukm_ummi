@extends('Layouts.index')

@section('content')
<!-- Success Message with Fade Effect -->
@if (session('success'))
<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 mx-8 lg:mx-20 animate-fade-in" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 1 1 0 2Z" />
    </svg>
    <div class="ms-3 text-sm font-medium">
        {{ session('success') }}
    </div>
    <button type="button" class="ms-auto bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200" onclick="this.parentElement.style.display='none'" aria-label="Close">
        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif

<section class="container my-2 mx-auto">
    <!-- Header Section -->
    <div class="flex justify-between items-center px-10 lg:px-20 mb-10">

    <!-- Tombol Tambah UKM -->
    @can('isAdmin')
    <a href="{{ route('ukms.create') }}" class="text-white bg-gradient-to-r from-green-500 to-green-400 hover:from-green-400 hover:to-green-300 border border-green-500 focus:ring-4 focus:ring-green-300 rounded-lg px-6 py-3 shadow-md transition-all hover:shadow-lg hover:scale-105">
        Tambah UKM
    </a>
    @endcan
</div>

    <!-- UKM Grid with Hover Effects -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-8 lg:px-16">
        @forelse ($ukms as $ukm)
        <div class="relative bg-white rounded-lg shadow-lg overflow-hidden flex flex-col h-full hover:shadow-2xl transition-shadow duration-300">
            <a href="#" class="block">
                @if ($ukm->image_ukm)
                <img class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300" src="{{ asset('storage/' . $ukm->image_ukm) }}" alt="Image UKM">
                @else
                <img class="w-full h-48 object-cover border-b-2 border-gray-200 transform hover:scale-105 transition-transform duration-300" src="{{ asset('images/default-placeholder.png') }}" alt="No Image">
                @endif
            </a>
            <div class="px-4 py-3 flex-grow">
                <h5 class="text-xl font-semibold text-gray-900">{{ $ukm->ukm_name }}</h5>
                <p class="text-gray-700">{{ Str::limit($ukm->description, 120) }}</p>

                <div class="mt-4">
                    <h6 class="font-semibold text-gray-800">History:</h6>
                    <p class="text-gray-600">{{ $ukm->history ?? 'Tidak ada history tersedia' }}</p>
                </div>
                <div class="mt-2">
                    <h6 class="font-semibold text-gray-800">Social Media:</h6>
                    <p class="text-blue-600">{{ $ukm->social_media ?? 'Tidak ada social media yang tersedia' }}</p>
                </div>
            </div>

            <div class="flex justify-between gap-2 px-4 py-3 border-t mt-auto bg-gray-50">
                <a href="{{ route('members.create', ['ukm' => $ukm->ukm_id]) }}" class="text-green-500 border border-green-500 hover:bg-green-600 hover:text-white rounded-lg px-4 py-2 text-sm transition-colors">
                    Daftar
                </a>
                @can('isAdmin')
                <a href="{{ route('ukms.edit', ['ukm' => $ukm->ukm_id]) }}" class="text-yellow-500 border border-yellow-500 hover:bg-yellow-600 hover:text-white rounded-lg px-4 py-2 text-sm transition-colors">
                    Edit
                </a>
                <form action="{{ route('ukms.destroy', $ukm->ukm_id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus UKM ini?')" class="text-red-700 border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-4 py-2 text-sm transition-colors">
                        Hapus
                    </button>
                </form>
                @endcan
            </div>
        </div>
        @empty
        <div class="flex items-center text-center h-96">
            <div class="mx-auto max-w-sm">
                <div class="p-3 bg-blue-100 rounded-full mx-auto text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
                <h1 class="mt-3 text-lg text-gray-800">Tidak Ada UKM</h1>
                <p class="mt-2 text-gray-500">Belum ada UKM yang terdaftar.</p>
                @can('isAdmin')
                <a href="{{ route('ukms.create') }}" class="mt-4 inline-flex items-center px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all">
                    Tambah UKM
                </a>
                @endcan
            </div>
        </div>
        @endforelse
    </div>
</section>

@endsection
