<?php

use App\Http\Controllers\MembroController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ParceiroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/submission', function () {
    return view('submission');
})->name('submission');

Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('noticias/create', [NoticiasController::class, 'create'])->name('noticias.create');
Route::get('noticias/{slug}/edit', [NoticiasController::class, 'edit'])->name('noticias.edit');
Route::post('noticias', [NoticiasController::class, 'store'])->name('noticias.store');
Route::put('noticias/{slug}', [NoticiasController::class, 'update'])->name('noticias.update');
Route::delete('noticias/{slug}', [NoticiasController::class, 'destroy'])->name('noticias.destroy');

Route::get('/', [NoticiasController::class, 'home'])->name('home');
Route::get('noticias/{slug}', [NoticiasController::class, 'show'])->name('noticias.show');
Route::get('noticias', [NoticiasController::class, 'index'])->name('noticias.index');

Route::get('/about', [MembroController::class, 'about'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('membros', MembroController::class);
    Route::resource('parceiros', ParceiroController::class);
});
require __DIR__.'/auth.php';