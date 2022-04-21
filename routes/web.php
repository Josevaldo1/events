<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminServiceController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', [App\Http\Controllers\Site\SiteHomeController::class, 'index'])->name('site.index');
Route::get('/about', [App\Http\Controllers\Site\SiteAboutController::class, 'index'])->name('site.about');
Route::get('/contact', [App\Http\Controllers\Site\SiteContactController::class, 'index'])->name('site.contact');
Route::get('/news_all', [App\Http\Controllers\Site\SiteNewsController::class, 'index'])->name('site.news.all');
Route::get('/news_single', [App\Http\Controllers\Site\SiteNewsController::class, 'single'])->name('site.single');
Route::get('/project', [App\Http\Controllers\Site\SiteProjectsController::class, 'index'])->name('site.projects');
Route::get('/service', [App\Http\Controllers\Site\SiteServicesController::class, 'index'])->name('site.service');
Auth::routes();

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
    Route::get('/service_index', [AdminServiceController::class, 'index'])->name('admin.service.index');
    Route::get('/service_create', [AdminServiceController::class, 'create'])->name('admin.service.create');
    Route::post('/service_create', [AdminServiceController::class, 'store'])->name('admin.service.save');
    Route::get('/service_destroy/{id}', [AdminServiceController::class, 'destroy'])->name('admin.service.destroy');
    Route::get('/service_edit/{id}', [AdminServiceController::class, 'edit'])->name('admin.service.edit');
    Route::put('/service_update/{id}', [AdminServiceController::class, 'update'])->name('admin.service.update');
});



