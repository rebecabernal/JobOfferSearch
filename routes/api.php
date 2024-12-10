<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\FeedbackController;

Route::get('/offers', [OfferController::class, 'index'])->name('apiindex');
Route::post('/offers', [OfferController::class, 'store'])->name('apistore');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('apishow');
Route::put('/offers/{id}', [OfferController::class, 'update'])->name('apiupdate');
Route::delete('/offers/{id}', [OfferController::class, 'destroy'])->name('apidestroy');

Route::get('/offers/{offerId}/news', [FeedbackController::class, 'index'])->name('apiindexNews');
Route::post('/offers/{offerId}/news', [FeedbackController::class, 'store'])->name('apistoreNews');
Route::get('/offers/{offerId}/news/{newsID}', [FeedbackController::class, 'show'])->name('apishowNews');
Route::put('/offers/{offerId}/news/{newsID}', [FeedbackController::class, 'update'])->name('apiupdateNews');
Route::delete('/offers/{offerId}/news/{newsId}', [FeedbackController::class, 'destroy'])->name('apidestroyNews');