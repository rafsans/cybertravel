<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/wisata', [HomeController::class, 'wisata'])->name('wisata');
Route::get('/wilayah', [HomeController::class, 'wilayah'])->name('wilayah');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/review', [HomeController::class, 'review'])->name('review');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('login', [AuthController::class, 'loginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'registerForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/wdestinasi1', [HomeController::class, 'wdestinasi1'])->name('wdestinasi1');
Route::get('/wpenginapan1', [HomeController::class, 'wpenginapan1'])->name('wpenginapan1');
Route::get('/wkuliner1', [HomeController::class, 'wkuliner1'])->name('wkuliner2');
Route::get('/wdestinasi2', [HomeController::class, 'wdestinasi2'])->name('wdestinasi2');
Route::get('/wpenginapan2', [HomeController::class, 'wpenginapan2'])->name('wpenginapan2');
Route::get('/wkuliner2', [HomeController::class, 'wkuliner2'])->name('wkuliner2');
Route::get('/wkuliner3', [HomeController::class, 'wkuliner3'])->name('wkuliner3');
Route::get('/wkuliner4', [HomeController::class, 'wkuliner4'])->name('wkuliner4');
Route::get('/wjogja', [HomeController::class, 'wjogja'])->name('wjogja');
Route::get('/wmalioboro', [HomeController::class, 'wmalioboro'])->name('wmalioboro');
Route::get('/wkhayangan', [HomeController::class, 'wkhayangan'])->name('wkhayangan');
Route::get('/wbakmimbah', [HomeController::class, 'wbakmimbah'])->name('wbakmimbah');
Route::get('/wbakmimbah2', [HomeController::class, 'wbakmimbah2'])->name('wbakmimbah2');
