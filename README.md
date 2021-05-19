# To-do list

Simple web application for managing to-do tasks.

# Technologies

-   Laravel Framework 7.30.4
-   Bootstrap 5.0.1
-   MySQL 5.7

# Languages

-   PHP 7.2.19

# Required

-   Laragon (I'm using version 4.0.16)

# Setup

Install Laragon url: https://laragon.org/download.html
On Laragon click on `Start all`

Open Laragon Terminal

```bash
git clone https://github.com/kamilagora/To-do-list
cd To-do-list
composer install
```

Create MySQL database named `to_do_database` in Laragon.

From Laragon terminal run:

```bash
php artisan key:generate
php artisan config:clear
php artisan migrate
php artisan db:seed
php artisan serve
```

The app will be available http://127.0.0.1:8000
