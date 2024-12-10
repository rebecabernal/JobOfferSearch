<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;

Route::get('/', [OfferController::class, 'home'])->name('home');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('show');