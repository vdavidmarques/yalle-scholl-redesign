<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\Site\PublicationController as PublicPublicationController;

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function (){
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('publications', PublicationController::class)->names('admin.publications');
    }
);

Route::get('/publicacoes', [PublicPublicationController::class, 'index'])->name('site.publications.index');
Route::get('/publicacoes/{publication}', [PublicPublicationController::class, 'show'])->name('site.publications.show');

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
