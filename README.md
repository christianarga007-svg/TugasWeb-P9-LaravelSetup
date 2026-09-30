# Tugas Rutin 9 - Setup Laravel & MVC
Oleh: Christian Arga Capah

<img width="1279" height="748" alt="image" src="https://github.com/user-attachments/assets/32dbb35c-5c28-4541-8018-747ddec7a718" />
<img width="1279" height="750" alt="image" src="https://github.com/user-attachments/assets/38ba7e9c-2146-4de3-906c-60a7f352fa7a" />
<img width="1279" height="751" alt="image" src="https://github.com/user-attachments/assets/90145579-89ab-4362-803d-e3098c9158c6" />
<img width="1279" height="749" alt="image" src="https://github.com/user-attachments/assets/8e0146d4-30ca-41c6-a4e8-77491948a528" />


## Langkah Instalasi Proyek
Berikut adalah langkah-langkah untuk menjalankan proyek Laravel ini di komputer lokal:
1. Pastikan Composer dan PHP (minimal versi 8.2) sudah terinstal.
2. *Clone repository* ini ke dalam folder lokal (misal: `C:\xampp\htdocs\`).
3. Buka terminal di dalam folder proyek tersebut dan jalankan perintah: `composer install` untuk mengunduh semua *dependency*.
4. Salin file `.env.example` menjadi `.env` lalu sesuaikan konfigurasi *database* (gunakan MySQL).
5. Jalankan perintah `php artisan key:generate` untuk membuat *application key*.
6. Jalankan perintah `php artisan migrate` untuk membangun tabel pondasi *database*.
7. Nyalakan server lokal dengan perintah `php artisan serve`.
8. Akses aplikasi melalui browser di `http://127.0.0.1:8000`.

## Penjelasan Struktur Direktori Utama Laravel
Berdasarkan arsitektur MVC, berikut adalah fungsi dari beberapa folder penting dalam proyek ini:
* **`app/`**: Otak aplikasi, tempat menyimpan logika *Model* (untuk database) dan *Controller* (untuk menangani *request*).
* **`resources/views/`**: Lapisan *View* dari MVC, berisi *file* HTML dan Blade *templating* untuk mengatur tampilan UI.
* **`routes/`**: Berisi *file* `web.php` yang berfungsi sebagai peta URL (Routing) untuk mengarahkan pengguna ke halaman yang tepat.
* **`database/`**: Menyimpan *file* *migrations* untuk mengatur evolusi skema tabel database dan data *dummy*.
* **`public/`**: Satu-satunya folder yang boleh diakses langsung oleh *browser*, titik awal masuknya seluruh *request* aplikasi.
