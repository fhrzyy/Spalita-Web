<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 5 TANGGUL (SPLITA) - Sekolah Kebanggaan Masyarakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style type="text/tailwindcss">
        @layer components {
            .nav-link {
                @apply px-3 py-2 text-sm font-medium text-white hover:text-yellow-200 transition duration-300;
            }
            .btn-primary {
                @apply px-4 py-2 bg-yellow-500 text-blue-900 font-bold rounded-lg hover:bg-yellow-400 transition duration-300;
            }
            .card {
                @apply bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300;
            }
            .section-title {
                @apply text-2xl md:text-3xl font-bold text-blue-900 mb-6 pb-2 border-b-2 border-yellow-500 inline-block;
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header dengan Navbar -->
    <header class="relative">
        <!-- Top Info Bar -->
        <div class="bg-blue-900 text-white py-1 px-4">
            <div class="container mx-auto flex flex-wrap justify-between items-center text-xs">
                <div class="flex items-center space-x-4">
                    <span><i class="fas fa-phone-alt mr-1"></i> (0331) 123456</span>
                    <span><i class="fas fa-envelope mr-1"></i> info@smpn5tanggul.sch.id</span>
                </div>
                <div class="flex space-x-2">
                    <a href="#" class="hover:text-yellow-300"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-yellow-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-yellow-300"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Main Navbar -->
        <nav class="bg-blue-800 shadow-md fixed left-0 right-0 top-0 z-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <div class="h-10 w-10 bg-yellow-500 rounded-full flex items-center justify-center mr-2">
                                <span class="font-bold text-blue-900">S5</span>
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">SMPN 5 TANGGUL</div>
                                <div class="text-yellow-300 text-xs -mt-1">SPLITA - Unggul dalam Prestasi</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center">
                        <a href="#" class="nav-link border-b-2 border-yellow-500">Home</a>
                        <a href="#" class="nav-link">About</a>
                        <a href="#" class="nav-link">Berita</a>
                        <a href="#" class="nav-link">PPDB</a>
                        <a href="#" class="ml-4 btn-primary">Login</a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-button" class="text-white hover:text-yellow-300 focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden bg-blue-800 pb-3 px-4">
                <a href="#" class="block nav-link border-l-4 border-yellow-500 pl-3 mb-1">Home</a>
                <a href="#" class="block nav-link pl-3 mb-1">About</a>
                <a href="#" class="block nav-link pl-3 mb-1">Berita</a>
                <a href="#" class="block nav-link pl-3 mb-1">PPDB</a>
                <a href="#" class="block mt-4 text-center btn-primary">Login</a>
            </div>
        </nav>
        
        <!-- Hero Section -->
        <div class="relative h-[60vh] bg-gradient-to-r from-blue-900 via-blue-700 to-blue-800 overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48ZyBmaWxsPSJ3aGl0ZSI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiLz48L2c+PC9zdmc+')]"></div>
            </div>
            
            <!-- BAGIAN YANG DIUBAH: Hero content sekarang centered -->
            <div class="container mx-auto px-4 h-full flex flex-col justify-center items-center text-center">
                <div class="max-w-2xl mx-auto">
                    <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-4">
                        Selamat Datang di 
                        <span class="text-yellow-300 block">SMPN 5 TANGGUL</span>
                    </h1>
                    <p class="text-blue-100 text-lg md:text-xl mb-8">
                        Mencetak generasi unggul yang berakhlak mulia, berprestasi, dan siap menghadapi tantangan masa depan.
                    </p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="#" class="btn-primary">PPDB Online</a>
                        <a href="#" class="px-4 py-2 bg-white text-blue-900 font-bold rounded-lg hover:bg-gray-100 transition duration-300">
                            Virtual Tour
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Animated Wave -->
            <div class="absolute bottom-0 left-0 right-0">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full">
                    <path fill="#ffffff" fill-opacity="1" d="M0,64L60,80C120,96,240,128,360,128C480,128,600,96,720,90.7C840,85,960,107,1080,112C1200,117,1320,107,1380,101.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                </svg> -->
            </div>
        </div>
    </header>

    <!-- Info Box -->
    <section class="py-8 -mt-10 relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Info Box 1 -->
                <div class="card p-6 border-t-4 border-blue-600 bg-gradient-to-br from-blue-50 to-white">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-600 rounded-full p-3 mr-4">
                            <i class="fas fa-bullhorn text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Pengumuman Terkini</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Dapatkan informasi terbaru seputar kegiatan sekolah, lomba, dan hal penting lainnya.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Info Box 2 -->
                <div class="card p-6 border-t-4 border-yellow-500 bg-gradient-to-br from-yellow-50 to-white">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-500 rounded-full p-3 mr-4">
                            <i class="fas fa-user-graduate text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">PPDB 2025/2026</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Pendaftaran peserta didik baru telah dibuka. Daftarkan putra-putri Anda sekarang juga!</p>
                    <a href="#" class="text-yellow-600 font-medium hover:text-yellow-800 inline-flex items-center">
                        Daftar Sekarang <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Info Box 3 -->
                <div class="card p-6 border-t-4 border-green-600 bg-gradient-to-br from-green-50 to-white">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-600 rounded-full p-3 mr-4">
                            <i class="fas fa-calendar-alt text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Jadwal Kegiatan</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Temukan jadwal kegiatan akademik dan non-akademik terbaru di SMPN 5 Tanggul.</p>
                    <a href="#" class="text-green-600 font-medium hover:text-green-800 inline-flex items-center">
                        Lihat Jadwal <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="mb-10 flex justify-between items-end">
                <h2 class="section-title">Berita Terbaru</h2>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Semua Berita</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Berita 1 -->
                <div class="card group">
                    <div class="relative overflow-hidden h-48">
                        <div class="h-full bg-blue-200 flex items-center justify-center">
                            <i class="fas fa-newspaper text-blue-400 text-5xl"></i>
                        </div>
                        <div class="absolute top-2 left-2 bg-yellow-500 text-xs font-bold text-white px-2 py-1 rounded">
                            PRESTASI
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="text-xs text-gray-500 mb-2">15 Mei 2025 | Admin</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">
                            Tim Robotik SPLITA Raih Juara 1 Kompetisi Nasional
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Tim robotik SMPN 5 Tanggul berhasil meraih juara 1 dalam Kompetisi Robotik Nasional yang diselenggarakan di Jakarta.
                        </p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Baca selengkapnya →
                        </a>
                    </div>
                </div>
                
                <!-- Berita 2 -->
                <div class="card group">
                    <div class="relative overflow-hidden h-48">
                        <div class="h-full bg-green-200 flex items-center justify-center">
                            <i class="fas fa-newspaper text-green-400 text-5xl"></i>
                        </div>
                        <div class="absolute top-2 left-2 bg-blue-500 text-xs font-bold text-white px-2 py-1 rounded">
                            KEGIATAN
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="text-xs text-gray-500 mb-2">10 Mei 2025 | Admin</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">
                            Peringatan Hari Pendidikan Nasional di SMPN 5 Tanggul
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            SMPN 5 Tanggul mengadakan upacara dan berbagai kegiatan untuk memperingati Hari Pendidikan Nasional.
                        </p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Baca selengkapnya →
                        </a>
                    </div>
                </div>
                
                <!-- Berita 3 -->
                <div class="card group">
                    <div class="relative overflow-hidden h-48">
                        <div class="h-full bg-red-200 flex items-center justify-center">
                            <i class="fas fa-newspaper text-red-400 text-5xl"></i>
                        </div>
                        <div class="absolute top-2 left-2 bg-green-500 text-xs font-bold text-white px-2 py-1 rounded">
                            FASILITAS
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="text-xs text-gray-500 mb-2">5 Mei 2025 | Admin</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">
                            Peresmian Laboratorium Komputer Baru
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            SMPN 5 Tanggul meresmikan laboratorium komputer baru yang dilengkapi dengan 30 unit komputer terbaru.
                        </p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Baca selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi & Galeri Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Prestasi -->
                <div>
                    <h2 class="section-title">Prestasi Terbaru</h2>
                    <div class="space-y-4">
                        <!-- Prestasi Item 1 -->
                        <div class="flex border-l-4 border-yellow-500 pl-4 pb-4">
                            <div class="mr-4 bg-blue-100 h-14 w-14 flex-shrink-0 rounded-full flex items-center justify-center">
                                <i class="fas fa-trophy text-yellow-500 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Juara 1 Kompetisi Robotik Nasional</h3>
                                <p class="text-sm text-gray-600 mb-1">Tim Robotik - Mei 2025</p>
                                <div class="inline-block px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded">Nasional</div>
                            </div>
                        </div>
                        
                        <!-- Prestasi Item 2 -->
                        <div class="flex border-l-4 border-blue-500 pl-4 pb-4">
                            <div class="mr-4 bg-blue-100 h-14 w-14 flex-shrink-0 rounded-full flex items-center justify-center">
                                <i class="fas fa-medal text-blue-500 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Juara 2 Olimpiade Matematika</h3>
                                <p class="text-sm text-gray-600 mb-1">Anita Susanti - April 2025</p>
                                <div class="inline-block px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded">Provinsi</div>
                            </div>
                        </div>
                        
                        <!-- Prestasi Item 3 -->
                        <div class="flex border-l-4 border-green-500 pl-4">
                            <div class="mr-4 bg-blue-100 h-14 w-14 flex-shrink-0 rounded-full flex items-center justify-center">
                                <i class="fas fa-award text-green-500 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Juara 1 Lomba Cerdas Cermat</h3>
                                <p class="text-sm text-gray-600 mb-1">Tim SPLITA - Maret 2025</p>
                                <div class="inline-block px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded">Kabupaten</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="mt-6 inline-block text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Semua Prestasi <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <!-- Galeri -->
                <div>
                    <h2 class="section-title">Galeri Kegiatan</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <!-- Galeri Item 1 -->
                        <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden group relative">
                            <div class="h-full flex items-center justify-center bg-blue-200">
                                <i class="fas fa-image text-blue-400 text-3xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-blue-900 bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-xs font-medium text-center px-2">Kegiatan Pramuka</span>
                            </div>
                        </div>
                        
                        <!-- Galeri Item 2 -->
                        <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden group relative">
                            <div class="h-full flex items-center justify-center bg-green-200">
                                <i class="fas fa-image text-green-400 text-3xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-blue-900 bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-xs font-medium text-center px-2">Lomba Robotik</span>
                            </div>
                        </div>
                        
                        <!-- Galeri Item 3 -->
                        <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden group relative">
                            <div class="h-full flex items-center justify-center bg-yellow-200">
                                <i class="fas fa-image text-yellow-400 text-3xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-blue-900 bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-xs font-medium text-center px-2">Upacara Bendera</span>
                            </div>
                        </div>
                        
                        <!-- Galeri Item 4 -->
                        <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden group relative">
                            <div class="h-full flex items-center justify-center bg-red-200">
                                <i class="fas fa-image text-red-400 text-3xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-blue-900 bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-xs font-medium text-center px-2">Olahraga Bersama</span>
                            </div>
                        </div>
                        
                        <!-- Galeri Item 5 -->
                        <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden group relative">
                            <div class="h-full flex items-center justify-center bg-purple-200">
                                <i class="fas fa-image text-purple-400 text-3xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-blue-900 bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-xs font-medium text-center px-2">Kunjungan Edukasi</span>
                            </div>
                        </div>
                        
                        <!-- Galeri Item 6 -->
                        <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden group relative">
                            <div class="h-full flex items-center justify-center bg-indigo-200">
                                <i class="fas fa-image text-indigo-400 text-3xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-blue-900 bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-xs font-medium text-center px-2">Pentas Seni</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="mt-6 inline-block text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Semua Galeri <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 relative overflow-hidden">
        <!-- Background Dots Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48ZyBmaWxsPSJ3aGl0ZSI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiLz48L2c+PC9zdmc+')]"></div>
        </div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">PPDB SMPN 5 TANGGUL</h2>
            <p class="text-blue-100 max-w-2xl mx-auto mb-8">
                Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026 telah dibuka. 
                Segera daftarkan putra/putri Anda untuk mendapatkan pendidikan berkualitas di SMPN 5 Tanggul!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="btn-primary text-base">
                    <i class="fas fa-user-plus mr-2"></i> Daftar Sekarang
                </a>
                <a href="#" class="px-4 py-2 bg-white text-blue-800 font-bold rounded-lg hover:bg-gray-100 transition duration-300 text-base">
                    <i class="fas fa-info-circle mr-2"></i> Informasi PPDB
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white">
        <!-- Main Footer -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- School Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 bg-yellow-500 rounded-full flex items-center justify-center mr-2">
                            <span class="font-bold text-blue-900">S5</span>
                        </div>
                        <div>
                            <div class="text-white font-bold">SMPN 5 TANGGUL</div>
                            <div class="text-yellow-300 text-xs -mt-1">SPLITA - Unggul dalam Prestasi</div>
                        </div>
                    </div>
                    <p class="text-blue-200 text-sm mb-4">
                        SMP Negeri 5 Tanggul adalah sekolah menengah pertama yang berlokasi di Kecamatan Tanggul, Kabupaten Jember, Jawa Timur.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="bg-blue-800 hover:bg-blue-700 h-8 w-8 rounded-full flex items-center justify-center">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="bg-blue-800 hover:bg-blue-700 h-8 w-8 rounded-full flex items-center justify-center">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="bg-blue-800 hover:bg-blue-700 h-8 w-8 rounded-full flex items-center justify-center">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4 border-b border-blue-800 pb-2">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-blue-200 hover:text-white">Beranda</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white">Berita</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white">PPDB</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white">Galeri</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white">Prestasi</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-bold mb-4 border-b border-blue-800 pb-2">Informasi Kontak</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-yellow-400"></i>
                            <span class="text-blue-200">Jl. Pendidikan No. 123, Kec. Tanggul, Kab. Jember, Jawa Timur</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-yellow-400"></i>
                            <span class="text-blue-200">(0331) 123456</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-yellow-400"></i>
                            <span class="text-blue-200">info@smpn5tanggul.sch.id</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-yellow-400"></i>
                            <span class="text-blue-200">Senin - Jumat: 07.00 - 14.00 WIB</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-bold mb-4 border-b border-blue-800 pb-2">Berlangganan</h3>
                    <p class="text-blue-200 text-sm mb-4">
                        Dapatkan informasi terbaru dari SMPN 5 Tanggul dengan berlangganan newsletter kami.
                    </p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Alamat Email" class="w-full px-3 py-2 bg-blue-800 border border-blue-700 text-white placeholder-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 text-sm">
                        <button type="submit" class="w-full px-3 py-2 bg-yellow-500 text-blue-900 font-bold rounded hover:bg-yellow-400 transition duration-300 text-sm">
                            Berlangganan
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="border-t border-blue-800 py-4">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
                <div class="text-blue-200 text-sm mb-2 md:mb-0">
                    &copy; 2025 SMPN 5 Tanggul. Hak Cipta Dilindungi.
                </div>
                <div class="text-blue-200 text-sm">
                    <span>Dibuat dengan <i class="fas fa-heart text-red-500"></i> oleh Tim IT SPLITA</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>