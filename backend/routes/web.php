<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Site\PublicationController as PublicPublicationController;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin', function () {
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

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function (){
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

        Route::resource('publications', PublicationController::class)->names('admin.publications');

        Route::get('/settings', [SettingsController::class, 'edit'])->name('admin.settings.edit');
        Route::put('/settings', [SettingsController::class, 'update'])->name('admin.settings.update');
    }
);

//Rotas públicas
Route::get('/publicacoes', [PublicPublicationController::class, 'index'])->name('site.publications.index');
Route::get('/publicacoes/{publication}', [PublicPublicationController::class, 'show'])->name('site.publications.show');


require __DIR__.'/auth.php';
