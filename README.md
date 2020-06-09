<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>



## Cara Instal

```bash
#download atau clone repo/folder

# Instal Composer 
https://getcomposer.org/

# akses directory
cd livewireContact

# jalankan composer update (lama download tergantung dari jaringan kalian)
composer update

# ubah nama file .env.example menjadi .env
.env

# Buat database livewire_contact dan edit file .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=livewire_contact
DB_USERNAME=root
DB_PASSWORD=

# generate key
php artisan key:generate

# jalankan migrasi
php artisan migrate

# buat server
php artisan serve

# akses web
localhost:8000

```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
