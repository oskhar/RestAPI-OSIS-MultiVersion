Berikut adalah versi README untuk proyek **Web Osis SMAN 96 Jakarta** yang diupdate untuk menggunakan Laravel 11:

# Web Osis SMAN 96 Jakarta - Web-OSIS-LaravelVersion

![License](https://img.shields.io/badge/license-MIT-green)

## Deskripsi

**Web Osis SMAN 96 Jakarta** adalah aplikasi web open-source yang dirancang untuk mengelola kegiatan sekolah yang didukung oleh Organisasi Siswa Intra Sekolah (OSIS), keorganisasian OSIS, dan kegiatan OSIS independen. Aplikasi ini dibangun menggunakan teknologi modern untuk memastikan performa yang optimal dan pengalaman pengguna yang baik.

## Fitur Utama

- Manajemen Kegiatan Mengelola jadwal dan rincian kegiatan sekolah yang didukung oleh OSIS.
- Keorganisasian OSIS Menyimpan dan mengelola informasi mengenai struktur dan anggota OSIS.
- Kegiatan OSIS Independen Mencatat dan melacak kegiatan yang diinisiasi secara independen oleh OSIS.
- Notifikasi dan Pengingat Mengirimkan notifikasi kepada anggota mengenai kegiatan yang akan datang.

## Teknologi yang Digunakan

- Frontend - Vue.js
- Backend - Laravel 11
- Database - MySQL
- Autentikasi - Sanctum

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda.

### Prasyarat

- PHP 8.1 atau lebih baru
- Composer
- Node.js (versi terbaru)
- npm

### Langkah Instalasi

1. Clone repositori ini

   ```bash
   git clone https://github.com/username/Web-OSIS-LaravelVersion.git
   cd Web-OSIS-LaravelVersion
   ```

2. Instal dependensi

   Menggunakan Composer:

   ```bash
   composer install
   ```

   Menggunakan npm atau yarn untuk dependensi frontend:

   ```bash
   npm install
   ```

3. Salin file konfigurasi lingkungan

   ```bash
   cp .env.example .env
   ```

   Edit file `.env` sesuai dengan konfigurasi database dan pengaturan lainnya.

4. Generate application key

   ```bash
   php artisan key:generate
   ```

5. Migrasi dan seeding database

   ```bash
   php artisan migrate --seed
   ```

6. Jalankan aplikasi

   Untuk menjalankan aplikasi dalam mode pengembangan:

   ```bash
   php artisan serve
   ```

   Untuk menjalankan build frontend:

   ```bash
   npm run dev
   ```

   Untuk menjalankan build produksi:

   ```bash
   npm run build
   ```

## Kontribusi

Kami menerima kontribusi dari siapa saja yang ingin berpartisipasi. Untuk mulai berkontribusi, harap baca panduan kontribusi berikut:

1. Fork repositori ini
2. Buat branch baru (`git checkout -b feature-nama-fitur`)
3. Commit perubahan Anda (`git commit -am 'feat: Fitur tentang apa'`)
4. Push ke branch (`git push origin feature-nama-fitur`)
5. Buat Pull Request

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.

## Kontak

Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami di [muhamadoskhar@gmail.com](mailto:muhamadoskhar@gmail.com).

---

Terima kasih telah menggunakan dan berkontribusi pada **Web Osis SMAN 96 Jakarta**!
