<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex flex-no-wrap">
        @include('admin.sidebar')

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
                    <span class="text-gray-600">Hello, Admin</span>
                    <img class="w-10 h-10 rounded-full border-2 border-blue-600" src="{{url('/img/logoundipa.png')}}"alt="">
                </div>
            </header>4                  
            <div class="p-6">
             <!-- Main content -->
              <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                  <!-- Card 1 -->
                  <div class="bg-white p-4 rounded-lg shadow">
                      <h2 class="text-xl font-semibold text-blue-600">Total Siswa</h2>
                      <p class="mt-2 text-3xl text-gray-800">1,234</p>
                  </div>

                  <!-- Card 2 -->
                  <div class="bg-white p-4 rounded-lg shadow">
                      <h2 class="text-xl font-semibold text-blue-600">Total Guru</h2>
                      <p class="mt-2 text-3xl text-gray-800">567</p>
                  </div>

                  <!-- Card 3 -->
                  <div class="bg-white p-4 rounded-lg shadow">
                      <h2 class="text-xl font-semibold text-blue-600">Total Kelas</h2>
                      <p class="mt-2 text-3xl text-gray-800">89</p>
                  </div>

                  <!-- Card 4 -->
                  <div class="bg-white p-4 rounded-lg shadow">
                      <h2 class="text-xl font-semibold text-blue-600">Revenue</h2>
                      <p class="mt-2 text-3xl text-gray-800">$12,345</p>
                  </div>
              </div>

              <!-- Recent Activities -->
              <div class="mt-8 bg-white p-6 rounded-lg shadow">
                  <h2 class="text-xl font-semibold text-blue-600">Aktivitas Terbaru</h2>
                  <table class="min-w-full mt-4">
                      <thead>
                          <tr class="bg-blue-100">
                              <th class="py-2 px-4 text-left">Siswa</th>
                              <th class="py-2 px-4 text-left">Aktivitas</th>
                              <th class="py-2 px-4 text-left">Jam</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="py-2 px-4">Juns</td>
                              <td class="py-2 px-4">Hadir</td>
                              <td class="py-2 px-4">24 Aug 2024</td>
                          </tr>
                          <tr>
                              <td class="py-2 px-4">Alji</td>
                              <td class="py-2 px-4">Hadir</td>
                              <td class="py-2 px-4">23 Aug 2024</td>
                          </tr>
                          <tr>
                              <td class="py-2 px-4">Zul</td>
                              <td class="py-2 px-4">Hadir</td>
                              <td class="py-2 px-4">22 Aug 2024</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- Recent Activities -->
              <div class="mt-8 bg-white p-6 rounded-lg shadow">
                  <h2 class="text-xl font-semibold text-blue-600">Aktivitas Terbaru</h2>
                  <table class="min-w-full mt-4">
                      <thead>
                          <tr class="bg-blue-100">
                              <th class="py-2 px-4 text-left">Siswa</th>
                              <th class="py-2 px-4 text-left">Aktivitas</th>
                              <th class="py-2 px-4 text-left">Jam</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="py-2 px-4">Juns</td>
                              <td class="py-2 px-4">Hadir</td>
                              <td class="py-2 px-4">24 Aug 2024</td>
                          </tr>
                          <tr>
                              <td class="py-2 px-4">Alji</td>
                              <td class="py-2 px-4">Hadir</td>
                              <td class="py-2 px-4">23 Aug 2024</td>
                          </tr>
                          <tr>
                              <td class="py-2 px-4">Zul</td>
                              <td class="py-2 px-4">Hadir</td>
                              <td class="py-2 px-4">22 Aug 2024</td>
                          </tr>
                      </tbody>
                  </table>
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
