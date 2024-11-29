<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/offers', [JobController::class, 'index'])->name('apiindex');
Route::post('/offers', [JobController::class, 'store'])->name('apistore');
Route::get('/offers/{id}', [JobController::class, 'show'])->name('apishow');
Route::put('/offers/{id}', [JobController::class, 'update'])->name('apiupdate');
Route::delete('/offers/{id}', [JobController::class, 'destroy'])->name('apidestroy');

Route::get('/offers/{jobId}/comments', [FeedbackController::class, 'index'])->name('apiindexComments');
Route::post('/offers/{jobId}/comments', [FeedbackController::class, 'store'])->name('apistoreComments');
Route::get('/offers/{jobId}/comments/{commentId}', [FeedbackController::class, 'show'])->name('apishowComments');
Route::put('/offers/{jobId}/comments/{commentId}', [FeedbackController::class, 'update'])->name('apiupdateComments');
Route::delete('/offers/{jobId}/comments/{commentId}', [FeedbackController::class, 'destroy'])->name('apidestroyComments');