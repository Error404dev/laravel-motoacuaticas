# Alquiler de Motos Acuáticas

Trabajo integrador de Desarrollo Web Dinámico. Grupo 5: Acosta, Toranzo y Gonzalez.

Aplicación web hecha en Laravel para administrar las motos acuáticas de un lugar de alquiler y los alquileres que se hacen de cada una.

## Funcionalidades

- CRUD de motos acuáticas (marca, modelo y precio por hora).
- CRUD de alquileres (moto, cliente, fecha y horas).
- Relación entre las dos entidades con Eloquent: una moto tiene muchos alquileres.
- Buscador de motos por marca y de alquileres por cliente.
- Ordenamiento de motos por precio y de alquileres por fecha.
- Validación de las motos con un Form Request.
- Interfaz con Bootstrap.

## Requisitos

- PHP 8.2 o superior, con las extensiones `pdo_sqlite` (o `pdo_mysql`), `mbstring`, `openssl`, `fileinfo` y `zip` activadas.
- Composer.

## Instalación

```bash
git clone https://github.com/Error404dev/laravel-motoacuaticas.git
cd laravel-motoacuaticas
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
