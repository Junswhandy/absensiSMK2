<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Admin Dashboard</title>
</head>
<body class="bg-light text-neutral font-sans">
    <!-- Sidebar -->
    <div id="sidebar" class=" w-64 bg-primary text-white fixed md:relative min-h-screen transform md:transform-none -translate-x-full md:translate-x-0 transition-transform duration-300 z-30 md:z-auto">
        <div class="p-6">
            <h1 class="text-3xl font-bold">WELCOME</h1>
        </div>
        <ul class="mt-4 space-y-2">
            <li>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-secondary hover:text-white transition-colors duration-200">
                    <span class="material-icons mr-3">dashboard</span>
                    <span class="text-lg">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-secondary hover:text-white transition-colors duration-200">
                    <span class="material-icons mr-3">people</span>
                    <span class="text-lg">Siswa</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-secondary hover:text-white transition-colors duration-200">
                    <span class="material-icons mr-3">people</span>
                    <span class="text-lg">Guru</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-secondary hover:text-white transition-colors duration-200">
                    <span class="material-icons mr-3">description</span>
                    <span class="text-lg">Laporan</span>
                </a>
            </li>
            {{-- <li>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-secondary hover:text-white transition-colors duration-200">
                    <span class="material-icons mr-3">settings</span>
                    <span class="text-lg">Settings</span>
                </a>
            </li> --}}
        </ul>
    </div>

 
</body>
</html>
