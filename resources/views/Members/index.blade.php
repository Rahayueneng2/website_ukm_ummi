@extends('Layouts.index')

@section('content')

<!-- Success Message -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@if (session('success'))
  <div id="alert-3" class="flex items-center p-4 mb-6 text-green-800 rounded-lg bg-green-50 mx-auto max-w-4xl" role="alert">
    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="ml-3 text-sm font-medium">{{ session('success') }}</span>
    <button type="button" class="ml-auto text-green-500 bg-green-50 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
      </svg>
    </button>
  </div>
@endif

@can('isAdmin')
<section class="container mx-auto my-2 px-4">
  <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Pendaftaran Mahasiswa UKM</h1>

  <!-- Tabel Anggota -->
  <div class="overflow-x-auto flex justify-center max-w-full sm:max-w-5xl mx-auto">
    <table class="table-auto min-w-full border border-gray-200 divide-y divide-gray-300 bg-white shadow-md rounded-lg text-sm">
      <thead class="bg-blue-600 text-white">
        <tr>
          <th class="px-6 py-3 text-left font-semibold">Nama</th>
          <th class="px-6 py-3 text-left font-semibold">UKM</th>
          <th class="px-6 py-3 text-left font-semibold">Program Studi</th>
          <th class="px-6 py-3 text-left font-semibold">Semester</th>
          <th class="px-6 py-3 text-center font-semibold">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($members as $member)
          <tr class="hover:bg-gray-100">
            <td class="px-6 py-3">{{ $member->name }}</td>
            <td class="px-6 py-3">{{ $member->ukm->ukm_name }}</td>
            <td class="px-6 py-3">{{ $member->prodi->prodi_name }}</td>
            <td class="px-6 py-3">{{ $member->semester->semester_number }}</td>
            <td class="px-6 py-3 text-center">
              <a href="{{ route('members.edit', ['member' => $member->member_id]) }}" class="text-yellow-500 hover:underline">Edit</a> | 
              <form action="{{ route('members.destroy', ['member' => $member->member_id]) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="px-6 py-3 text-center text-gray-500">Tidak ada anggota yang ditemukan.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</section>
@endcan

<!-- Chart Section -->
<section class="container mx-auto my-20 flex flex-col items-center px-4">
  <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Statistik UKM yang Paling Banyak Dipilih</h2>
  <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-2xl mx-auto">
    <canvas id="ukmChart" style="width: 100%; height: 400px;"></canvas>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ukmLabels = @json($ukmStats->pluck('ukm_name'));
  const ukmData = @json($ukmStats->pluck('total'));

  // Generate dynamic colors
  const generateColors = (count) => {
    const colors = [];
    for (let i = 0; i < count; i++) {
      const r = Math.floor(Math.random() * 256);
      const g = Math.floor(Math.random() * 256);
      const b = Math.floor(Math.random() * 256);
      colors.push(`rgba(${r}, ${g}, ${b}, 0.6)`);
    }
    return colors;
  };

  const backgroundColors = generateColors(ukmData.length);
  const borderColors = backgroundColors.map(color => color.replace('0.6', '1'));

  const ctx = document.getElementById('ukmChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ukmLabels,
      datasets: [{
        label: 'Jumlah Pendaftar',
        data: ukmData,
        backgroundColor: backgroundColors,
        borderColor: borderColors,
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

@endsection
