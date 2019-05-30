<?php

Route::get('/', function () {
    return redirect('api/1.0');
});

Route::fallback(function () {
    return response()->json(['status' => 404,'message' => 'Not Found.'], 404);
})->name('api.fallback.404');
