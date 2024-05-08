<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/viewPdf',[PDFController::class,'viewPdf']);
Route::get('/form',function () {
    return view('form');
});
