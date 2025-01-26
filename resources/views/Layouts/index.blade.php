<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header>
  <nav class="bg-blue-900 shadow-lg fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://ummi.ac.id/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="storage/images/logo_UMMI.png" class="h-10" alt="Flowbite Logo">
        <span class="self-center text-2xl font-bold text-white">GoUKM</span>
      </a>
      <div class="flex md:order-2">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center transition-all">
            Logout
        </button>
        </form>
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-300 transition-all"
          aria-controls="navbar-sticky" aria-expanded="false">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-gray-100 md:flex-row md:space-x-8 md:mt-0 md:bg-transparent">
          <li><a href="{{ route('ukms.index') }}" class="text-white hover:text-blue-300">UKM</a></li>
          <li><a href="{{ route('members.index') }}" class="text-white hover:text-blue-300">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

@if (session('success'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 max-w-4xl mx-auto mt-16">
    {{ session('success') }}
  </div>
@endif
@if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 max-w-4xl mx-auto mt-16">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<main class="min-h-screen bg-blue-50 pt-20">
  <div class="max-w-screen-xl mx-auto py-8">
    @yield('content')
  </div>
</main>

<footer class="bg-blue-900 text-white py-10">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h2 class="text-lg font-semibold">GoUKM</h2>
        <p class="mt-4">Ayo daftar dan kembangkan bakatmu!.</p>
      </div>
      <div>
        <h2 class="text-lg font-semibold">Ikuti Kami</h2>
        <div class="flex mt-4 space-x-6">
          <a href="#" class="hover:text-blue-300 transition-all"><i class="fab fa-facebook"></i> Facebook</a>
          <a href="#" class="hover:text-blue-300 transition-all"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
      </div>
      <div>
        <h2 class="text-lg font-semibold">Dukungan</h2>
        <ul class="mt-4 space-y-2">
          <li><a href="#" class="hover:underline">Bantuan</a></li>
          <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
