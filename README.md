# InventarisPro - Aplikasi Manajemen Inventaris Modern

[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss)](https://tailwindcss.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

<p align="center">
  ![Image](https://github.com/user-attachments/assets/edabf255-8113-4be2-b800-fa741d3d396a)
</p>

**InventarisPro** adalah aplikasi web berbasis PHP dengan framework Laravel yang dirancang untuk membantu bisnis dalam mengelola stok inventaris mereka secara efisien. Aplikasi ini menyediakan fitur-fitur penting untuk melacak produk, kategori, supplier, serta transaksi barang masuk dan keluar. Dengan antarmuka yang responsif berkat Tailwind CSS, InventarisPro mudah digunakan di berbagai perangkat.

## ✨ Fitur Utama

* **Dashboard Informatif**: Menyajikan ringkasan data inventaris penting seperti total produk, stok rendah, dan transaksi terbaru.
* **Manajemen Produk**: Tambah, lihat, edit, cetak barcode dan hapus informasi produk termasuk nama, SKU, deskripsi, dan harga.
* **Manajemen Kategori**: Kategorikan produk untuk pengelolaan yang lebih terstruktur.
* **Manajemen Supplier**: Kelola informasi supplier produk Anda.
* **Transaksi Barang Masuk**: Catat penerimaan barang dari supplier dengan detail tanggal, produk, dan jumlah.
* **Transaksi Barang Keluar**: Catat penjualan atau pengeluaran barang dengan detail tanggal, produk, dan jumlah.
* **Laporan Stok**: Lihat daftar stok terkini untuk semua produk.
* **Riwayat Transaksi**: Lacak semua transaksi barang masuk dan keluar dan cetak laporan dengan format pdf.
* **Autentikasi Pengguna**: Sistem login dan registrasi yang aman.
* **Hak Akses Pengguna** (rencana pengembangan): Implementasi peran pengguna (Admin, Staf Gudang) dengan hak akses yang berbeda.
* **Antarmuka Responsif**: Dirancang dengan Tailwind CSS untuk tampilan yang optimal di berbagai ukuran layar.

## 🛠️ Teknologi yang Digunakan

* **Backend**: [PHP](https://www.php.net/) ^8.1
* **Framework**: [Laravel](https://laravel.com/) ^10.0
* **Frontend**: [Blade](https://laravel.com/docs/10.x/blade), [Tailwind CSS](https://tailwindcss.com/) ^3.0
* **Database**: [MySQL](https://www.mysql.com/) atau [PostgreSQL](https://www.postgresql.org/)
* **Package Tambahan**:
    * `laravel/ui`: Untuk scaffolding dasar UI (jika digunakan)
    * `laravel/sanctum` atau `laravel/passport` (rencana pengembangan untuk API)

## ⚙️ Cara Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan aplikasi ini di lingkungan lokal Anda.

1.  **Clone Repository:**
    Buka terminal Anda dan jalankan perintah:
    \`\`\`bash
    git clone https://github.com/IamImam7/project_management
    cd nproject_management
    \`\`\`

2.  **Install Composer Dependencies:**
    Pastikan Composer terinstal di sistem Anda. Jalankan:
    \`\`\`bash
    composer install
    \`\`\`

3.  **Salin File Environment:**
    Salin file `.env.example` menjadi `.env`:
    \`\`\`bash
    cp .env.example .env
    \`\`\`

4.  **Generate Application Key:**
    Hasilkan kunci aplikasi Laravel:
    \`\`\`bash
    php artisan key:generate
    \`\`\`

5.  **Konfigurasi Database:**
    Buka file `.env` dan konfigurasi detail koneksi database Anda (nama database, username, password).

    \`\`\env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_database
    DB_PASSWORD=password_database
    \`\`\`

6.  **Jalankan Migrasi:**
    Buat tabel-tabel database:
    \`\`\`bash
    php artisan migrate --seed
    \`\`\`
    (Opsi `--seed` akan menjalankan seeders jika ada, contohnya untuk membuat user admin awal atau data dummy.)

7.  **Install NPM Dependencies:**
    Pastikan Node.js dan NPM terinstal di sistem Anda. Jalankan:
    \`\`\`bash
    npm install
    \`\`\`

8.  **Compile Assets:**
    Kompilasi file CSS dan JavaScript:
    \`\`\`bash
    npm run dev
    \`\`\`

9.  **Start Development Server:**
    Jalankan server pengembangan Laravel:
    \`\`\`bash
    php artisan serve
    \`\`\`
    Aplikasi akan berjalan di `http://127.0.0.1:8000`.

## 🚀 Cara Penggunaan

1.  Buka browser Anda dan kunjungi `http://127.0.0.1:8000`.
2.  Lakukan registrasi akun baru atau gunakan akun default jika disediakan oleh seeders atau menggunakan tinker dengan :
    ```php
    $user = \App\Models\User::find(1);
    $user->assignRole('Admin');
    exit;
    ```
4.  Navigasi melalui menu di sidebar untuk mengelola produk, kategori, supplier, dan melakukan transaksi stok.
5.  Lihat laporan stok dan riwayat transaksi melalui menu laporan.

## 🖼️ Screenshots


<p align="center">
 ![Image](https://github.com/user-attachments/assets/6af41341-046d-4942-ae7b-0598b6cedcb5)
</p>

<p align="center">
  ![Image](https://github.com/user-attachments/assets/f1951663-41f2-4764-b56a-f163404c8e2b)
</p>

<p align="center">
  ![Image](https://github.com/user-attachments/assets/d6fe08d0-a48b-4d00-8e7a-3766f1465fc9)
</p>
<p align="center">
  ![Image](https://github.com/user-attachments/assets/af2be35d-1f1a-4938-9977-b4d8260661ab)
</p>

## 🚦 Rencana Pengembangan

Berikut adalah beberapa fitur yang direncanakan untuk pengembangan di masa mendatang:

* Implementasi sistem peran dan hak akses pengguna yang lebih lengkap (Admin, Staf Gudang).
* Integrasi barcode scanner untuk mempercepat proses input.
* Notifikasi email untuk stok rendah.
* API untuk integrasi dengan sistem lain.



## 📄 Lisensi

Proyek ini dilisensikan di bawah lisensi [MIT License](LICENSE).

---

Dibuat dengan Niat oleh Saya Sendiri 
