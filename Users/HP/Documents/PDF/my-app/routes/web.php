<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

// Route to show the form
Route::get('form', [PdfController::class, 'showForm'])->name('show.form');

// Route to handle form submission and generate PDF
Route::post('generate-pdf', [PdfController::class, 'generatePdf'])->name('generate.pdf');
