# Scuti/AdminMetronic
This is a form element pre-written with adminlte library of https://keenthemes.com/metronic/.

# How to install

### Step 1: install

```php
composer require scuti/admin-metronic
```

### Step 2: add service provider

In config/app.php, add following line to provider

```php
Scuti\Admin\Metronic\AdminServiceProvider::class,
```

### Step 3: Use the package Admin Metronic

```php
php artisan vendor:publish --tag=admin-metronic --force
```

### Step 4: In routes/web.php

```
Route::get('/admin', function () {
    return view('admin.index');
});

```
# admin-metronic
