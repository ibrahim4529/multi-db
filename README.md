## Simple Implementation Multi DB using Laravel

### Requirement To run
- Docker Desktop (docker with docker compose)
- PHP
- Composer

### How To run
Clone Project dan masuk ke dalam folder project
```bash
git clone https://github.com/ibrahim4529/multi-db.git
cd multi-db
```
Untuk menjalankan aplikasi yang pertama adalah running
Database server menggunakan docker
```bash
docker compose up -d
```
Kemudian install dependency menggunakan composer
```bash
composer install
```

Kemudian copy file .env.example menjadi .env
```bash
cp .env.example .env
```

Kemudian generate key
```bash
php artisan key:generate
```

Kemudian jalankan migration
```bash
php artisan migrate
```

Kemudian jalankan seeder
```bash
php artisan db:seed
```


Kemudian jalankan server
```bash
php artisan serve
```
