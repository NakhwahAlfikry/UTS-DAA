# Business Requirements Document (BRD)
Nama Proyek: Aplikasi Manajemen Restoran

# 1. Tujuan Proyek
Membangun aplikasi untuk memudahkan manajemen restoran dengan dua role utama: Admin yang memiliki akses untuk mengelola menu dan pesanan, dan Pelanggan yang dapat melihat menu dan melakukan pemesanan makanan. Aplikasi ini bertujuan untuk meningkatkan efisiensi operasional restoran dan kenyamanan pelanggan.

# 3. Ruang Lingkup
Fitur untuk Admin: Mengelola menu (tambah, edit, hapus), mengelola pesanan, dan melihat laporan transaksi.
Fitur untuk Pelanggan: Melihat daftar menu
# 4. Stakeholders
Pengguna:

Admin: Bertanggung jawab untuk mengelola daftar menu
Pelanggan: Dapat melihat menu dan melakukan pemesanan.

# 5. Kebutuhan Bisnis
Mempermudah Admin dalam mengelola menu dan pesanan dengan antarmuka yang sederhana dan mudah dipahami.
Memberikan pelanggan cara yang cepat dan mudah untuk memesan makanan secara online atau langsung di tempat.

# 6. Persyaratan Fungsional
Admin dapat menambah, mengedit, dan menghapus menu makanan dan minuman.
Admin dapat melihat daftar pesanan masuk dan memprosesnya (misalnya, mengubah status pesanan).
Pelanggan dapat melihat daftar menu makanan dan minuman yang tersedia, lengkap dengan harga dan deskripsi.
Pelanggan dapat memesan makanan dan melihat total harga sebelum melakukan konfirmasi pesanan.
Aplikasi harus memberikan otentikasi login untuk membedakan antara Admin dan Pelanggan (username dan password).
Admin dapat melihat laporan transaksi berdasarkan tanggal, bulan, atau periode tertentu.

# 7. Kebutuhan Non-Fungsional
Keamanan: Aplikasi harus memiliki sistem otentikasi yang kuat untuk mencegah akses yang tidak sah.
Kinerja: Aplikasi harus dapat menangani banyak pesanan dan menu tanpa penurunan kinerja yang signifikan.
Kompatibilitas: Aplikasi harus dapat diakses melalui perangkat desktop dan mobile untuk kenyamanan pengguna.

# 8. Analisis Use Case
Admin:

Login ke aplikasi.
Menambahkan, mengedit, atau menghapus menu.
Melihat daftar pesanan yang masuk.

Pelanggan:

Login ke aplikasi.
Melihat daftar menu.

# 9. Risiko & Tantangan
Kesalahan Input: Potensi kesalahan dalam menambah, mengedit, atau menghapus menu oleh Admin yang dapat menyebabkan gangguan operasional.
Keamanan: Risiko akses yang tidak sah pada data menu dan pesanan jika sistem otentikasi tidak kuat.
Kesalahan Pemesanan: Kemungkinan pelanggan memesan item yang tidak tersedia atau salah memilih item karena keterbatasan informasi.
Keterbatasan Kapasitas Server: Aplikasi harus mampu menangani lonjakan transaksi, terutama saat jam sibuk atau promosi besar.
Dokumen ini menjelaskan seluruh komponen penting dalam pengembangan aplikasi manajemen restoran, termasuk fitur yang harus ada, kebutuhan fungsional dan non-fungsional, serta tantangan yang perlu diatasi.