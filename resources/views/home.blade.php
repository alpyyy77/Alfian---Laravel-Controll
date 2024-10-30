<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans text-gray-900">

    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-6">
                    <div class="w-12">
                        <img src="assets/images/logo nav.png" alt="logo museum" class="w-full">
                    </div>
                    <ul class="flex space-x-6">
                        <li><a href="Home.html" class="text-gray-700 hover:text-gray-900">Home</a></li>
                        <li><a href="about" class="text-gray-700 hover:text-gray-900">about</a></li>
                        <li><a href="Collection.html" class="text-gray-700 hover:text-gray-900">Collection</a></li>
                        <li><a href="History&Art.html" class="text-gray-700 hover:text-gray-900">History & Art</a></li>
                        <li><a href="Ticket&Visit.html" class="text-gray-700 hover:text-gray-900">Ticket & Visit</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto my-10 px-6">
        <!-- Judul -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold">About Us</h1>
        </div>

        <!-- Museum Story Section -->
        <div class="grid md:grid-cols-2 gap-10 mb-10">
            <div>
                <h2 class="text-2xl font-semibold mb-4">Museum Story</h2>
                <p class="text-gray-700 leading-relaxed">Menjelang akhir abad ke-18, di Eropa tengah terjadi revolusi intelektual (the age of enlightenment) dimana pemikiran-pemikiran ilmiah dan ilmu pengetahuan mulai berkembang. Pada tahun 1752 di Harlem, perkumpulan ilmiah Belanda bernama De Hollandsche Maatschappij der Wetenschappen berdiri...</p>
            </div>
            <div>
                <img src="assets/images/Museum Nasional, Jakarta 1.png" alt="Gambar Museum" class="rounded-lg shadow-md">
            </div>
        </div>

        <!-- Visi Misi Section -->
        <div class="grid md:grid-cols-2 gap-10 mb-10">
            <div>
                <h2 class="text-2xl font-semibold mb-4">Visi Misi</h2>
                <p class="text-gray-700 leading-relaxed mb-4">Berdasarkan visi, misi, tujuan, sasaran, kebijakan, dan program Ditjen Kebudayaan Kementerian Pendidikan, Kebudayaan, Riset & Teknologi Tahun 2020—2024, Museum Nasional merumuskan Visi dan Misi Tahun 2020—2024 sebagai berikut:</p>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li><strong>Visi:</strong> Mewujudkan pengelolaan cagar budaya museum yang terpadu untuk memperkuat identitas dan ketahanan budaya serta meningkatkan kesejahteraan masyarakat dan pengaruh budaya Indonesia di tengah peradaban dunia.</li>
                    <li><strong>Misi:</strong> Tata kelola cagar budaya dan museum yang tangkas, profesional dan berkelanjutan. Ekosistem pengelolaan cagar budaya dan museum yang meningkatkan kesejahteraan umum...</li>
                </ul>
            </div>
            <div>
                <img src="assets/images/visi misi.png" alt="Visi Misi" class="rounded-lg shadow-md">
            </div>
        </div>

        <!-- Additional Images Section -->
        <div class="flex flex-col space-y-10">
            <div class="flex justify-center">
                <img src="assets/images/garis1.png" alt="garis1" class="w-full max-w-2xl">
            </div>
            <div class="flex justify-center">
                <img src="assets/images/profil pimpinan.png" alt="profil pimpinan" class="rounded-lg shadow-md w-full max-w-2xl">
            </div>
            <div class="flex justify-center">
                <img src="assets/images/strukturrr.png" alt="struktur organisasi" class="rounded-lg shadow-md w-full max-w-2xl">
            </div>
        </div>
    </main>

    <footer class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>Hak Cipta &copy; 2024 ContohWebsite.com</p>
        </div>
    </footer>

</body>
</html>
