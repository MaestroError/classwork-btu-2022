<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('components.contact-page.index');
});

Route::get('/search', function () {
    return view('components.search-page.index');
});


// routes/web.php

use App\Http\Controllers\MenuController;

Route::get('/menu', [MenuController::class, 'index']);



Route::prefix("admin")->name("admin")->group(function() {
    Route::get("", function () {
        return view('admin.index');
    });

});