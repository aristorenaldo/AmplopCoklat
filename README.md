# Amplop Coklat
## About
Tugas akhir RPL kelompok 7
## Pengunduhan 

- Melakukan clone dari repository (disarankan menginstall git).

```bash
git clone https://github.com/aristorenaldo/AmplopCoklat.git
```

- Melalui download `.zip`. Kemudian extract file

## Penginstallan

1. Jalankan database mysql dan buatlah database dengan `AmplopCoklat` (nama database dapat diganti).

2. Membuat file `.env` pada folder root project menggunakan text editor.

3. Copy isi [`.env.example`](https://github.com/laravel/laravel/blob/master/.env.example) kemudian paste pada file `.env`.

4. Di dalam file `.env`, sesuaikan informasi database yang dibuat.

```
DB_DATABASE=AmplopCoklat
DB_USERNAME=root
DB_PASSWORD=
```

5. Buka terminal jalankan perintah berikut

```bash
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```
