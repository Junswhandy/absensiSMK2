<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex flex-no-wrap">
        @include('siswa.sidebar')

        <!-- Main content -->
        <div class="flex-grow md:ml-2">
            <!-- Header -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <button id="menuButton" class="text-2xl text-blue-600 focus:outline-none md:hidden">
                        ☰
                    </button>
                    <h1 class="text-2xl font-bold text-blue-600">SMK MUHAMMADIYAH 2</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Hello, Nama Siswa</span>
                    <img class="w-10 h-10 rounded-full border-2 border-blue-600" src="{{url('/img/logoundipa.png')}}" alt="">
                </div>
            </header>

            <!-- Main content -->
            <div class="p-6">
                <!-- Student Biodata -->
                <div class="bg-white p-6 rounded-lg shadow flex flex-col md:flex-row items-center md:items-start">
                    <div class="w-32 h-32 md:w-48 md:h-48 rounded-full overflow-hidden border-4 border-blue-600">
                        <img src="{{url('/img/logoundipa.png')}}" alt="Foto Siswa" class="w-full h-full object-cover">
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-6">
                        {{-- <h2 class="text-2xl font-semibold text-blue-600">Biodata Siswa</h2> --}}
                        <div class="mt-4">
                            <p class="text-gray-800"><span class="font-bold">NISN:</span> 1234567890</p>
                            <p class="text-gray-800 mt-2"><span class="font-bold">Nama:</span> Ahmad Sulaiman</p>
                            <p class="text-gray-800 mt-2"><span class="font-bold">Jenis Kelamin:</span> Laki-laki</p>
                            <p class="text-gray-800 mt-2"><span class="font-bold">Alamat:</span> Jl. Melati No. 23</p>
                            <p class="text-gray-800 mt-2"><span class="font-bold">Kelas:</span> XII IPA 1</p>
                            <p class="text-gray-800 mt-2"><span class="font-bold">Nama Wali:</span> Budi Sulaiman</p>
                            <p class="text-gray-800 mt-2"><span class="font-bold">Telepon Wali:</span> 08123456789</p>
                            <p class="text-gray-800 mt-2"><span class="font-bold">Email Wali:</span> budi@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const menuButton = document.getElementById('menuButton');
        const sidebar = document.getElementById('sidebar');

        menuButton.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
