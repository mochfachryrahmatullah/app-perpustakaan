# App Perpustakaan

Aplikasi Sistem Perpustakaan Digital Kampus yang dikelola oleh petugas/admin untuk mengelola buku, anggota, dan transaksi peminjaman.

## Cara Menjalankan Proyek (Lokal)
1. Buka terminal di folder proyek.
2. Jalankan perintah `php artisan serve`.
3. Buka browser dan akses `http://127.0.0.1:8000`.

## Pemahaman Konsep MVC
Menurut pemahaman saya, arsitektur MVC membagi aplikasi menjadi tiga bagian utama. **Model** bertugas untuk bertanggung jawab atas data dan aturan bisnis terkait data tersebut. Model adalah satu-satunya bagian yang "tahu" tentang struktur tabel books, members, atau loans, dan bagaimana relasi antar data itu bekerja. **View** berfungsi sebagai bertanggung jawab murni atas tampilan yang dilihat pengguna (HTML). View tidak boleh berisi logika bisnis rumit, hanya menampilkan data yang sudah disiapkan. Sedangkan **Controller** berperan untuk bertanggung jawab menerima request dari pengguna, memanggil Model untuk mengambil/mengubah data, lalu mengirim data tersebut ke View untuk ditampilkan. Controller adalah "penghubung" antara Model dan View.