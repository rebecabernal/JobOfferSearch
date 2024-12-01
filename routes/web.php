<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;

Route::get('/', [OfferController::class, 'welcome'])->name('welcome');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('show');