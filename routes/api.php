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

Route::get('/offers/{offerId}/comments', [FeedbackController::class, 'index'])->name('apiindexComments');
Route::post('/offers/{offerId}/comments', [FeedbackController::class, 'store'])->name('apistoreComments');
Route::get('/offers/{offerId}/comments/{commentId}', [FeedbackController::class, 'show'])->name('apishowComments');
Route::put('/offers/{offerId}/comments/{commentId}', [FeedbackController::class, 'update'])->name('apiupdateComments');
Route::delete('/offers/{offerId}/comments/{commentId}', [FeedbackController::class, 'destroy'])->name('apidestroyComments');