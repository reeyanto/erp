## Panduan Instalasi & Penggunaan

**Lakukan clone:**  
`git clone https://github.com/reeyanto/erp.git` 

**Masuk ke folder project:**  
`cd erp`  

**Install dependency PHP:**  
`composer install`  

**Buat berkas konfigurasi (.env):**  
`cp .env.example .env`  

**Buat application encryption key:**  
`php artisan key:generate`  

**Atur database (atau gunakan default):**  
`DB_CONNECTION=sqlite`  
`# DB_HOST=127.0.0.1`  
`# DB_PORT=3306`  
`# DB_DATABASE=laravel`  
`# DB_USERNAME=root`  
`# DB_PASSWORD=`  

**Jalankan migrasi database dan seeder:**  
`php artisan migrate --seed`  

**Jalankan aplikasi:**  
`php artisan serve`  

**Masuk ke dashboard lewat browser:**  
`localhost:8000/admin`  

gunakan detail berikut:  
email: `admin@example.com`  
password: `password`  