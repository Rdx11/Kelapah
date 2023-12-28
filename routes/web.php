<?php

use App\Http\Controllers\{
    ArticleController,
    CategoryController,
    DashboardController,
    HomeController,
    ReportController,
    UserController
};
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile-information', function () {
        return view('backend.pages.auth.profile');
    })->name('profile-information');

    Route::get('/change-password', function () {
        return view('backend.pages.auth.change-password');
    })->name('change-password');

    Route::get('buat-laporan', [ReportController::class, 'create'])->name('create.report');
    Route::post('buat-laporan', [ReportController::class, 'store'])->name('store.report');
});

Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    Route::put('/report-update-status/{id}', [ReportController::class, 'updateStatus'])->name('report-update-status');
    Route::delete('report/{id}', [ReportController::class, 'destroy'])->name('report.destroy');
    Route::resource('user', UserController::class);
    Route::resource('article', ArticleController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);
    Route::group(['prefix' => 'kelapah-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/daftar-article', [ArticleController::class, 'listArticle'])->name('list.article');
Route::get('article/{article:slug}', [ArticleController::class, 'show'])->name('show.article');
