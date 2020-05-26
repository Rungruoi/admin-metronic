# Scuti/AdminMetronic
This is a form element pre-written with adminlte library of acacha.

# How to install

### Step 1: install

```php
composer require dungvn/admin-metronic
```

### Step 2: add service provider

In config/app.php, add following line to provider

```php
scuti\theme\admin\metronic\AdminServiceProvider::class,
```

### Step 3: Publish 

```php
php artisan vendor:publish --tag=admin-metronic --force
```

### Step 4: Copy app.blade.php file to root folder of view, extend in any view

```php
Route::get('/admin', function () {
    return view('admin.index');
});
```
# admin-metronic
