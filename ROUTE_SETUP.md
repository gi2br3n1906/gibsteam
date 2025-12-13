Example Route Setup for web.php
================================

Add this route to your routes/web.php file:

```php
Route::get('/', function () {
    return view('home');
});
```

Or if you prefer using a controller:

```php
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
```

Then create the controller:

```bash
php artisan make:controller HomeController
```

And add the index method:

```php
public function index()
{
    return view('home');
}
```
