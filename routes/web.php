<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and main of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class, 'welcome'])->name('welcome');
Route::get('/uzbek', [MainController::class, 'uzbek'])->name('uzbek');
Route::get('/world', [RegionController::class, 'world'])->name('world');



Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

/*
|---------------------------------------------------------------------------------
| Barcha adminlar ro'yxatdan o'tishi yoki Login qilib kirishi uchun saxifamiz
|------------------------------------------------------------------------
*/
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('register', [AdminController::class, 'register'])->name('register');
Route::post('authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::post('register', [AdminController::class, 'register_store'])->name('register_store');

/*-------------------------------------------------------------------------------------------------------------*/

/*
|---------------------------------------------------------------------------------
| Barcha viloyat shaxarlarimiz yangililari
|------------------------------------------------------------------------
*/
Route::get('/tashkent', [RegionController::class, 'tashkent'])->name('tashkent');
Route::get('/karshi', [RegionController::class, 'karshi'])->name('karshi');
Route::get('/xiva', [RegionController::class, 'xiva'])->name('xiva');
Route::get('/samarkand', [RegionController::class, 'samarkand'])->name('samarkand');
Route::get('/nukus', [RegionController::class, 'nukus'])->name('nukus');
Route::get('/andijan', [RegionController::class, 'andijan'])->name('andijan');
Route::get('/fargana', [RegionController::class, 'fargana'])->name('fargana');
Route::get('/namangan', [RegionController::class, 'namangan'])->name('namangan');
Route::get('/bukhara', [RegionController::class, 'bukhara'])->name('bukhara');
Route::get('/termiz', [RegionController::class, 'termiz'])->name('termiz');
Route::get('/jizzax', [RegionController::class, 'jizzax'])->name('jizzax');
Route::get('/sirdaryo', [RegionController::class, 'sirdaryo'])->name('sirdaryo');
Route::get('/latest-news', [RegionController::class, 'latest'])->name('latest-news');

/*-------------------------------------------------------------------------------------------------------------*/

/*
|--------------------------------------------------------------------------
| Ushbu saxifamiz Barcha adminlar ko'ra oladigan saxifa
|-----------------------------------------------------------------
*/

Route::get('main-search', [NewsController::class, 'main_search'])->name('main-search');

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::resource('/news', NewsController::class);
        Route::get('/search', [NewsController::class, 'search'])->name('search');
    });
});


