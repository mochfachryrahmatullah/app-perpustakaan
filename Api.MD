# Dokumentasi REST API - App Perpustakaan

Berikut adalah dokumentasi 11 endpoint API yang tersedia pada aplikasi perpustakaan.

| Method | URL | Body (jika ada) | Contoh Response (Status Code) |
|---|---|---|---|
| **GET** | `/api/books` | - | **(200 OK)**<br>```json { "data": [ { "id": 1, "judul": "Laskar Pelangi", "category": { "id": 2, "nama_kategori": "Novel" } } ], "links": {...}, "meta": {...} } ``` |
| **GET** | `/api/books/{id}` | - | **(200 OK)**<br>```json { "data": { "id": 1, "judul": "Laskar Pelangi", "penulis": "Andrea Hirata", "stok": 5, "category": { "id": 2, "nama_kategori": "Novel" } } } ``` |
| **POST** | `/api/books` | ```json { "judul": "Buku Baru", "penulis": "Fulan", "penerbit": "Gramedia", "tahun_terbit": 2024, "stok": 10, "category_id": 1 } ``` | **(201 Created)**<br>```json { "data": { "id": 15, "judul": "Buku Baru", "stok": 10, "category": { "id": 1, "nama_kategori": "Sains" } } } ``` |
| **POST** | `/api/books` *(Gagal)* | ```json {} ``` | **(422 Unprocessable Entity)**<br>```json { "message": "The judul field is required.", "errors": { "judul": ["The judul field is required."] } } ``` |
| **PUT** | `/api/books/{id}` | ```json { "judul": "Buku Update", "penulis": "Fulan", "penerbit": "Gramedia", "tahun_terbit": 2024, "stok": 15, "category_id": 1 } ``` | **(200 OK)**<br>```json { "data": { "id": 15, "judul": "Buku Update", "stok": 15 } } ``` |
| **DELETE**| `/api/books/{id}` | - | **(200 OK)**<br>```json { "message": "Buku berhasil dihapus." } ``` |
| **GET** | `/api/members` | - | **(200 OK)**<br>```json { "data": [ { "id": 1, "nama": "Budi", "nim": "3123500001" } ], "links": {...}, "meta": {...} } ``` |
| **GET** | `/api/members/{id}`| - | **(200 OK)**<br>```json { "data": { "id": 1, "nama": "Budi", "nim": "3123500001" } } ``` |
| **GET** | `/api/loans` | - | **(200 OK)**<br>```json { "data": [ { "id": 1, "member": { "id": 1, "nama": "Budi" }, "petugas": { "id": 1, "name": "Admin" }, "status": "dipinjam", "books": [ { "id": 1, "judul": "Laskar Pelangi" } ] } ], "links": {...}, "meta": {...} } ``` |
| **POST** | `/api/loans` | ```json { "member_id": 1, "user_id": 1, "tanggal_pinjam": "2026-11-02", "tanggal_kembali": "2026-11-09", "book_ids": [1, 2] } ``` | **(201 Created)**<br>```json { "data": { "id": 5, "status": "dipinjam", "books": [...] } } ``` |
| **PUT** | `/api/loans/{id}/kembalikan`| - | **(200 OK)**<br>```json { "data": { "id": 5, "status": "dikembalikan", "tanggal_dikembalikan": "2026-11-02" } } ``` |
| **GET** | `/api/stats` | - | **(200 OK)**<br>```json { "total_buku": 15, "total_anggota": 10, "peminjaman_aktif": 3 } ``` |