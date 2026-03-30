# MINI PROJECT 1 PBW
NAMA: ZAHRA AURELLYA HERDIANSYAH

NIM: 2409116062

KELAS: SI B 2024

# Personal Portfolio Website

Website ini merupakan project portfolio pribadi yang dibuat menggunakan HTML, CSS, dan Bootstrap 5. Tujuan dari project ini adalah untuk menampilkan informasi tentang diri saya, latar belakang pendidikan, keterampilan, serta sertifikat yang telah saya peroleh dalam bentuk website yang modern, responsive, dan user-friendly.
Website ini dirancang dengan tampilan yang bersih, warna yang konsisten, serta tambahan animasi agar terlihat lebih menarik.

# Tampilan Setiap Section / Fitur

## Navbar
<img width="1879" height="77" alt="image" src="https://github.com/user-attachments/assets/1a30de93-51fa-40b7-877a-2243f4241fab" />

### Tampilan:
1. Navbar berisi:
  - Nama Website
2. Menu navigasi:
  - Home
  - About Me
  - Certificates

### Fitur:
- Menggunakan Bootstrap 5 Navbar Component
- Smooth scroll ke setiap section
- Warna background kontras agar mudah terlihat

## Hero Section
Hero section adalah bagian pertama yang muncul saat website dibuka.

<img width="1878" height="880" alt="image" src="https://github.com/user-attachments/assets/e12f34cd-9ccb-433e-a7cf-6903abe19af2" />

### Tampilan:
- Nama lengkap
- Deskripsi singkat tentang diri saya
- Subtitle dengan warna custom
- Layout yang berada di tengah halaman

### Fitur:
- Menggunakan text rata kanan kiri (justify) pada deskripsi
- Warna subtitle disesuaikan dengan tema website
- Responsive pada berbagai ukuran layar
- Spacing yang proporsional agar terlihat rapi

Hero section dibuat semenarik mungkin karena merupakan bagian pertama yang dilihat oleh pengunjung.

## About me section
Section ini berisi informasi lebih detail tentang diri saya.

<img width="1874" height="866" alt="image" src="https://github.com/user-attachments/assets/2bd33a2d-e4a5-4adb-95a2-580ff71c21aa" />

### Tampilan:
- Profile singkat
- Education (riwayat pendidikan)
- Skills (kemampuan yang dimiliki)
- Informasi ditampilkan menggunakan card agar lebih terstruktur dan mudah dibaca.

### Fitur:
- Menggunakan Bootstrap Grid System (row, col) agar responsif
- Setiap card memiliki jarak yang rapi
- Menggunakan animasi fade dan slide saat di-scroll
- Layout berubah otomatis di tampilan mobile

Animasi ditambahkan agar website tidak terlihat statis dan lebih interaktif.

## Certificate section
Section ini menampilkan daftar sertifikat yang telah saya peroleh.

<img width="1883" height="896" alt="image" src="https://github.com/user-attachments/assets/685fe450-c52f-4740-a15e-5d56b31ff6c7" />

### Tampilan:
- Gambar sertifikat
- Judul sertifikat
- Ditampilkan dalam bentuk card

### Fitur:
- Menggunakan Bootstrap Card Component
- Menggunakan CSS linear-gradient() untuk background card
- Gradient dibuat dari atas ke bawah (top to bottom)
- Hover effect (card akan sedikit naik dan memiliki shadow saat disentuh)

### Responsive grid:
- 1 kolom pada mobile
- 3 kolom pada desktop

Section ini bertujuan untuk menunjukkan pencapaian dan pengalaman yang saya miliki.

## Footer section
Footer merupakan bagian paling bawah dari website.

<img width="494" height="38" alt="image" src="https://github.com/user-attachments/assets/90fdedff-d03f-4b34-9a26-5babb7fdc289" />

### Tampilan:
- Copyright
- Tampilan minimalis

### Fitur:
- Tinggi footer diperkecil agar terlihat compact
- Warna kontras dengan isi website
- Responsive di semua ukuran layar

Footer dibuat sederhana agar tidak mengganggu fokus utama website.

# Penjelasan Code Setiap Section

## NAVBAR
Navbar dibuat menggunakan komponen Bootstrap 5 untuk mempermudah pembuatan navigasi yang responsive.
`<nav id="navbar" class="navbar navbar-expand-lg bg-navbar fixed-top">`
- navbar → class utama Bootstrap untuk membuat navbar
- navbar-expand-lg → navbar akan berubah menjadi hamburger menu di layar kecil
- bg-navbar → class custom untuk warna background
- fixed-top → navbar tetap berada di atas saat di-scroll

Bagian brand:
`<a class="navbar-brand fw-bold" href="#">`
- navbar-brand → menampilkan nama website
- fw-bold → membuat teks lebih tebal

Menu navigasi:
`<ul class="navbar-nav ms-auto">`
- navbar-nav → container menu
- ms-auto → membuat menu berada di sisi kanan

### code
```
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg bg-navbar fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Zahra Aurellya Herdiansyah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
            <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
          </ul>
        </div>
      </div>
    </nav>
```

## Hero section
Struktur menggunakan:
`<section>`

Styling menggunakan CSS untuk:
- Mengatur warna subtitle
- Mengatur font-weight
- Mengatur text-align: justify
- Mengatur margin dan spacing

Bootstrap digunakan untuk membantu positioning dan alignment.

### code
```
    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">

          <!-- KIRI (Foto) -->
          <div class="col-lg-6 d-flex justify-content-center align-items-center">
              <img src="profile.jpeg" alt="Profile" class="profile-img">
          </div>

          <!-- KANAN (Teks) -->
          <div class="col-lg-6 text-center text-lg-start">
            <h1 class="h2 fw-bold hero-title">  
              Halo, saya Zahra Aurellya Herdiansyah
            </h1>
            <p class="lead hero-subtitle">
              Saya adalah mahasiswa Sistem Informasi yang memiliki ketertarikan pada pengembangan perangkat lunak dan analisis data. Saya terbiasa mengerjakan proyek berbasis web dan mobile, serta memiliki kemampuan dalam manajemen database dan perancangan sistem. Portofolio ini dibuat sebagai dokumentasi perjalanan akademik dan profesional saya.
            </p>
          </div>

        </div>
      </div>
    </section>
```

## About Me Section
Menggunakan Bootstrap Grid:
- container
- row
- col-md-4

Animasi dibuat dengan:
- opacity
- transform
- transition
- JavaScript untuk mendeteksi scroll

Class .visible ditambahkan saat elemen masuk ke viewport sehingga animasi berjalan dengan smooth.

### code
```
    <!-- About Me Section -->
    <section id="about" class="py-5">
      <div class="container">
        <h2 class="text-center mb-4">About Me</h2>
```

## Certificates Section

Menggunakan:
- Bootstrap .card
- .card-body
- .card-img-top

Gradient dibuat dengan:
`background: linear-gradient(to bottom, color1, color2);`

Hover effect dibuat menggunakan:
`transform: translateY(-5px);
box-shadow: ...`

Ini membuat tampilan lebih modern dan interaktif.

### code
```
    <!-- Certificates Section -->
    <section id="certificates" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5 fw-bold">Certificates</h2>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">

          <div class="col">
            <div class="card h-100 shadow-sm">
              <img src="isc.jpeg" class="card-img-top" alt="Certificate 1">
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">ISC - PUBLIKASI & DOKUMENTASI</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 shadow-sm">
              <img src="tarot.jpeg" class="card-img-top" alt="Certificate 2">
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">TAROT - ANGGOTA PDD</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 shadow-sm">
              <img src="insevent.jpeg" class="card-img-top" alt="Certificate 3">
              <div class="card-body text-center">
                <h5 class="card-title fw-semibold">INSEVENT - PANITIA</h5>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
```

## Footer
Menggunakan:
`<footer>`

CSS digunakan untuk:
- Mengatur padding
- Mengatur font-size
- Mengatur warna background dan teks

### code
```
    <!-- Footer -->
    <footer>
      &copy; 2026 Zahra Aurellya. All rights reserved.
    </footer>
```

# Desain dan Styling
Website ini menggunakan kombinasi warna yang soft dan konsisten agar terlihat estetik.
Beberapa elemen desain yang digunakan:
- Border radius pada card
- Shadow halus
- Gradient background
- Hover animation
- Spacing yang konsisten

Semua styling dibuat menggunakan CSS custom dan Bootstrap utility class.

# Teknologi yang Digunakan
Website ini dibuat menggunakan:

### HTML5
Digunakan untuk membuat struktur halaman website.

### CSS3
Digunakan untuk styling, layout, animasi, dan gradient.

### Bootstrap 5
Digunakan untuk grid system, card component, dan responsive layout.

