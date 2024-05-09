<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/viewPdf',[PDFController::class,'viewPdf']);
Route::get('/mpdf',[PDFController::class,'mpdf']);
Route::get('/form',function () {
    return view('form');
});
Route::get('/raw',function () {
    return view('rawmpdf');
});
