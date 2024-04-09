# Sistem Informasi Pengaduan Masyarakat - CodeIgniter 4

## Deskripsi
Warning: Tidak untuk diperjual belikan! copyright@skuyngoding

## Set Up (Local)
- Install xampp (min. PHP Version: 7.3+) 
- Aktifkan ekstensi `intl` dan `mbstring` pada file `php.ini`
	-> C:\xampp\php\php.ini

	contoh: 
		;extension=intl
	hapus `;` menjadi:
		extension=intl
	lanjutkan dengan ekstensi mbstring, kemudian save file, restart apache

- Buat database baru dengan nama `ci4_pengaduan`
- Import `database.sql` 

- Setelah apache dan mysql nya dijalankan, Jalankan aplikasi melalui terminal (pada directory folder app) dengan command : `php spark serve`
- Akses aplikasi: http://localhost:8080
