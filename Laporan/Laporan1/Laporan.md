# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** [Imam Nawawi]  
**NIM:** [2024573010025]  
**Kelas:** [TI-2C]  

---

## Abstrak 
Laporan ini berisi tentang cara menginstall laravel , dan tujuan saya membuat laporan ini untuk mengedukasi sesama teman atau adik kelas yg belum mengerti, dan tujuan untuk saya sendiri bisa kemungkinan saya akan lupa jadi saya bisa menglihat laporan ini
---

## 1. Pendahuluan
- Laravel Adalah satu framework PHP yang paling populer dan serbaguna di dunia saat ini. Dikembangkan Oleh Taylor Otwell pada tahun 2011, Laravel telah merevolusi cara pengembang web membangun aplikasi dengan PHP
-  Apa itu Laravel?, Laravel adalah framework web PHP yang open-source yang dirancang untuk membuat pengembangan web menjadi lebih mudah dan lebih cepat. secara default, framework ini menggunakan pola arsitektur MVC(Model-View-Controller)yang membantu logika aplikasi dari tampilan dan pengelolaan data. Laravel juga merupakan framework high-level yang bersifat opinionated(punya aturan dan konversi tertentu).
- Opinionated framework artinya laravel sudah membawa seperangkat konvensi dan best practices yang menjadi panduan dalam membangun aplikasi
-   Kelebihannya: - Banyak fitur siap pakai
                  - Konsistensi kode antar proyek
                  - Memudahkan kolaborasi tim
- Laravel cocok untuk membangun aplikasi web dan layanan backend API, aplikasi e-commercte, sistem manajamen konten(CMS)

---

## 2. Komponen Utama Laravel (ringkas)
Tuliskan penjelasan singkat (1–3 kalimat) untuk tiap komponen berikut:
- Blade (template), blade adalah template engine laravel yang memudahkan pembuatan tampilan dengan sintak sederhana , mendukung layouting dan reusability 
- Eloquent (ORM), Eloquent adalah ORM(Object Relational Mapping) yang memungkinkan interaksi dengan database menggunakan model berbasis objek alih-alih sql query mentah.
- Routing Berfungsi utuk mendefinisikan URL endpoint dan mengarahkannya ke controller atau closure tertentu
- Controllers Adalah kelas yang mengatur logika aplikasi dengan menjembatani antara request (routing) dan response (view/model).
- Migrations & Seeders, Migration digunakan untuk mengatur struktur database secara versioning, sedangkan seeder digunakan untuk mengisi data awal ke dalam tabel.
- Artisan CLI Artisan adalah command-line interface laravel yang menyediakan berbagai perintah untuk otomatisasi seperti membuat model , migration, atau menjalankan server.
- Testing (PHPUnit), Laravel mendukung PHPUnit untuk menulis dan menjalankan test otomatis, memastikan fitur aplikasi berjalan sesuai yang diharapkan .
(Tambahkan komponen lain jika ingin)

---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.
 - Laporan yg ada paling atas adalah folder atau file untuk menampung laporan praktikum yg sudah dikerjakan 
 -  1. app/

Berisi logika inti aplikasi.

Console/ → tempat untuk membuat custom Artisan command.

Exceptions/ → menangani error & exception.

Http/

Controllers/ → tempat controller (logika request/response).

Middleware/ → filter request sebelum masuk ke controller.

Models/ → representasi tabel database dengan Eloquent ORM.

Providers/ → service provider yang mengatur bootstrap service aplikasi.

2. bootstrap/

app.php → file utama untuk bootstrap Laravel.

cache/ → menyimpan file cache framework (otomatis dibuat).

3. config/

Berisi semua file konfigurasi aplikasi, contoh:

app.php → konfigurasi utama aplikasi.

database.php → konfigurasi database.

mail.php → konfigurasi email.

queue.php → konfigurasi job queue.

dll.

4. database/

factories/ → membuat data dummy untuk testing.

migrations/ → skrip versioning database (create/modify tabel).

seeders/ → mengisi data awal ke tabel.

5. public/

index.php → pintu masuk utama aplikasi Laravel.

assets (css, js, gambar) → file publik yang bisa diakses langsung.

6. resources/

views/ → file Blade template untuk tampilan.

lang/ → file translasi multi-bahasa.

js/, css/ → sumber asset frontend (sebelum diproses Vite).

7. routes/

web.php → route untuk aplikasi web.

api.php → route untuk API.

console.php → route command artisan.

channels.php → definisi broadcast channel.

8. storage/

app/ → file aplikasi yang disimpan.

framework/ → cache, session, view compiled.

logs/ → log error & aktivitas aplikasi.

9. tests/

Feature/ → testing level fitur besar (misalnya halaman login).

Unit/ → testing unit kecil (misalnya fungsi tertentu).

10. vendor/

Berisi semua dependency PHP (library Laravel + package lain dari Composer).

 - .editorconfig → mengatur standar penulisan kode (indentasi, encoding, dsb.) agar konsisten di berbagai editor.

 - env → berisi konfigurasi environment (database, key aplikasi, mail, dsb.) yang berbeda-beda tiap server.

 - env.example → contoh template .env, biasanya dipakai sebagai acuan untuk developer lain.

 -   gitattributes → aturan Git untuk file tertentu (misalnya normalisasi line ending, text diff).

 - gitignore → menentukan file/folder mana yang tidak perlu dilacak oleh Git (misalnya /vendor, /node_modules).

 -  artisan → command-line interface Laravel untuk menjalankan perintah (buat controller, migrate database, dll).

 - composer.json → mendefinisikan dependency PHP project dan metadata (nama project, autoload, dsb.).

 - composer.lock → menyimpan versi pasti dari dependency yang diinstall agar konsisten di semua mesin.

 - package.json → mendefinisikan dependency JavaScript (misalnya Vite, Tailwind, Vue/React) untuk frontend.

 - phpunit.xml → file konfigurasi untuk PHPUnit (framework testing PHP yang dipakai Laravel).

 - README.md → dokumentasi singkat proyek (cara setup, cara menjalankan, informasi tambahan).

 - vite.config.js → file konfigurasi Vite (build tool modern) untuk meng-compile asset frontend (JS, CSS).

---

## 4. Diagram MVC dan Cara kerjanya

 Meletakkan Gambar 
 ![Logo Laravel](Gambar/laravel.jpg)

---

## 6. Kelebihan & Kekurangan (refleksi singkat)
- Kelebihan 
    Meskipun Laravel kaya fitur dan memudahkan pengembangan, framework ini cenderung lebih berat dibanding framework PHP ringan sehingga butuh resource server lebih besar. Selain itu, update versinya cepat sehingga kadang membuat kode lama tidak kompatibel, dan bagi pemula, kurva belajarnya cukup curam.
- Struktur folder yang kompleks → banyak folder (app, config, routes, resources, dll.) sehingga membingungkan di awal.

- Konsep MVC → butuh waktu untuk memahami peran Model, View, dan Controller.

- Eloquent ORM → cara kerja relasi antar tabel lewat model kadang sulit dipahami pemula.

- Routing & Middleware → pemula sering bingung alur request dari route → controller → view.

- Migration & Seeder → butuh pemahaman database versioning, tidak sekadar query SQL manual.

- Artisan CLI → banyak perintah, pemula biasanya belum terbiasa dengan command-line.

- Fitur terlalu banyak → bisa membuat kewalahan kalau belajar semuanya sekaligus.

---

## 7. Referensi
- https://www.everand.com/book/874828246/Laravel-12-Training-Kit-A-Practical-Guide-to-Modern-Web-Development
- https://santrikoding.com/tutorial-laravel-12-2-cara-install-laravel-12

---