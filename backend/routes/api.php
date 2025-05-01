<?php

use App\Models\Publication;
use Illuminate\Support\Facades\Route;

Route::get('/publications', function () {
    return Publication::latest()->get();
});
