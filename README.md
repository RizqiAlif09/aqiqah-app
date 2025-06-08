# 🐐 Aqiqah App Backend Dashboard

Selamat datang di **Aqiqah App Backend Dashboard** – sistem backend dan dashboard admin untuk pengelolaan layanan aqiqah dan paket nasi box. Aplikasi ini dibangun menggunakan Laravel 12, Livewire, dan Tailwind CSS. Tujuannya adalah untuk mempermudah pengelolaan layanan aqiqah secara digital dengan fitur checkout, stok real-time, dan sistem artikel informasi.

---

## 🚀 Fitur Utama

- 📦 **Paket Aqiqah**: Menampilkan berbagai pilihan paket aqiqah yang dapat dipesan oleh pelanggan.
- 🍱 **Paket Nasi Box**: Dipesan untuk hajatan atau acara lain, lengkap dengan menu dan harga.
- ✍️ **Artikel & Kategori Artikel**: Menampilkan informasi atau berita terkait aqiqah dan kegiatan lainnya.
- 📊 **Manajemen Stok Mingguan**: Stok produk dikontrol secara mingguan agar pemesanan tidak melebihi kapasitas.
- 💳 **Checkout dan Transaksi**: Pelanggan dapat memilih berbagai paket dan melakukan checkout. Sistem mencatat transaksi beserta statusnya (pending, settlement, expired, selesai).
- ✅ **Konfirmasi Admin**: Transaksi selesai dikonfirmasi secara manual oleh admin melalui dashboard.

---

## 🛠️ Teknologi & Tools

- **Backend**: [Laravel 12](https://laravel.com/)
- **Frontend**: [Livewire](https://livewire.laravel.com/) + [Tailwind CSS](https://tailwindcss.com/)
- **Database**: MySQL / MariaDB
- **Payment Integration** (future): [Midtrans](https://midtrans.com)
- **Authentication**: Laravel Breeze (opsional)

---

## 📦 Requirement

Sebelum instalasi, pastikan sistem Anda memiliki requirement berikut:

- PHP >= 8.2
- Composer
- MySQL / MariaDB
- Node.js & NPM
- Git

# 📝 Lisensi
Proyek ini dilisensikan di bawah MIT License.
Silakan gunakan dan modifikasi sesuai kebutuhan.


## ⚙️ Instalasi

Ikuti langkah-langkah berikut untuk menjalankan project ini secara lokal:

```bash
# Clone repository ini
git clone https://github.com/username/aqiqah-app-dashboard.git
cd aqiqah-app-dashboard

# Install dependency PHP
composer install

# Install dependency front-end
npm install && npm run build

# Copy file environment
cp .env.example .env

# Generate app key
php artisan key:generate

# Konfigurasi database pada file .env
DB_DATABASE=aqiqah_db
DB_USERNAME=root
DB_PASSWORD=

# Jalankan migrasi
php artisan migrate --seed

# Jalankan server lokal
php artisan serve



## ✍️ Author 1
Nama: Rizqi ALif Permana Putra
Email: [rizqialif@gmail.com]
LinkedIn: https://www.linkedin.com/in/rizqialifpermanaputra/
GitHub: https://github.com/RizqiAlif09


## ✍️ Author 2
Nama: Barito Surya Ramadhani
Email: baritosurya13@gmail.com
LinkedIn: https://www.linkedin.com/in/barito-surya-ramadhani/
GitHub: https://github.com/ramaboy13


# 📝 Lisensi
Proyek ini dilisensikan di bawah MIT License.
Silakan gunakan dan modifikasi sesuai kebutuhan.

#🚀 Catatan Tambahan
Fitur integrasi dengan Midtrans akan dikembangkan pada tahap selanjutnya.

Pastikan fitur checkout bekerja sesuai logika: stok, pilihan paket, harga dinamis.

Semua validasi dan status transaksi perlu dikelola dengan benar di sisi backend dan dashboard admin.