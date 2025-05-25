<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<h1 align="center">Inventory Management System</h1>
<hr>

## Quick Installation

```bash
git clone https://github.com/ekramasif/Inventory_Management_System.git
cd Inventory_Management_System
````

### Composer Dependencies

```bash
composer update
```

---

### Setup Environment Variables

Copy the example environment file:

```bash
cp .env.example .env
```

Edit `.env` and set your database credentials accordingly:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=IMS           # Make sure this database exists
DB_USERNAME=root           # Your MySQL username
DB_PASSWORD=your_password  # Your MySQL password (leave blank if none)
```

---

### PHP Extensions Required

Make sure the following PHP extensions are enabled in your `php.ini` (usually found via `php --ini`):

* `pdo_mysql`
* `mbstring`
* `fileinfo`
* `curl`

Uncomment or add these lines in your `php.ini`:

```ini
extension=pdo_mysql
extension=mbstring
extension=fileinfo
extension=curl
```

Restart your terminal or server after changes.

---

### Create Database

Create the database manually using your MySQL client or phpMyAdmin:

```sql
CREATE DATABASE IMS;
```

---

### Run Migrations

```bash
php artisan migrate
```

---

### Run the Server

```bash
php artisan serve
```

Visit [http://127.0.0.1:8000/](http://127.0.0.1:8000/) in your browser.

---

## Troubleshooting

* **Could not find driver:** Make sure `pdo_mysql` is enabled in `php.ini`.
* **Extensions missing:** Enable `mbstring`, `fileinfo`, and `curl`.
* **Database connection errors:** Check `.env` credentials and MySQL server status.
* If you are using XAMPP/WAMP/Laragon, verify you are editing the correct `php.ini` for CLI PHP.
