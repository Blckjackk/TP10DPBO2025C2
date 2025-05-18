# Tugas Praktikum 10 - Desain dan Pemrograman Berorientasi Objek

## Janji
Saya Ahmad Izzuddin Azzam dengan NIM 2300492 mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi Proyek
Proyek ini adalah aplikasi berbasis web sederhana untuk mengelola data mahasiswa menggunakan pola desain Model-View-ViewModel (MVVM). Aplikasi ini memungkinkan pengguna untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data mahasiswa yang disimpan dalam database MySQL.

## Desain Program
Program ini dirancang dengan pola MVVM untuk memisahkan logika bisnis, antarmuka pengguna, dan pengelolaan data. Berikut adalah pembagian komponen utama:

### 1. Model
Komponen Model bertanggung jawab untuk mengelola data dan berinteraksi dengan database. File-file yang termasuk dalam komponen ini adalah:

- `Database.php`: Mengelola koneksi ke database dan eksekusi query.
- `Student.php`,  `Enrollment.php`, `Subject.php`: Representasi data sebagai objek.

### 2. View
Komponen View bertanggung jawab untuk menampilkan data kepada pengguna dan menerima input dari pengguna. File-file yang termasuk dalam komponen ini adalah:

- `views/student_list.php`, `views/student_form.php`: Mengelola tampilan daftar mahasiswa dan form tambah/edit mahasiswa.
- `views/enrollment_list.php`, `views/enrollment_form.php`: Mengelola tampilan daftar dan form pendaftaran.
- `views/subject_list.php`, `views/subject_form.php`: Mengelola tampilan daftar dan form mata pelajaran.
- Template HTML:
  - `views/template/header.php`: Header template.
  - `views/template/footer.php`: Footer template.

### 3. ViewModel
Komponen ViewModel bertanggung jawab untuk menghubungkan Model dan View. File-file yang termasuk dalam komponen ini adalah:

- `viewmodel/StudentViewModel.php`, `viewmodel/DepartmentViewModel.php`, `viewmodel/EnrollmentViewModel.php`, `viewmodel/ShiftViewModel.php`, `viewmodel/StaffViewModel.php`, `viewmodel/SubjectViewModel.php`: Implementasi ViewModel untuk mengelola data masing-masing entitas.

## Alur Kerja Program

### Menampilkan Data
- Saat halaman utama diakses, file `index.php` memanggil metode ViewModel untuk mengambil data dari database.
- Data dikirimkan ke View untuk ditampilkan.

### Menambah Data
- Pengguna mengklik tombol tambah, dan form tambah ditampilkan.
- Setelah form diisi dan disubmit, data dikirim ke ViewModel untuk disimpan ke database.

### Mengedit Data
- Pengguna mengklik tombol edit pada salah satu data.
- Form edit ditampilkan.
- Setelah form diisi dan disubmit, data diperbarui melalui ViewModel.

### Menghapus Data
- Pengguna mengklik tombol hapus pada salah satu data.
- Data dihapus dari database melalui ViewModel.
