<?php

Route::get('/', function () {
    return redirect('api/1.0');
})->name('api.version1.0');

Route::fallback(function () {
    return response()->json(['status' => 404,'message' => 'Route Not Found.'], 404);
})->name('api.version1.0.fallback.404');
