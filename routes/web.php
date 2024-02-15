<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'homepage'])->name('home');

Route::get('/articoli', [ArticleController::class, 'index'])->name('articoli');

Route::get("/articolo/{id}",[ArticleController::class, 'show'])->name('articoli.dettaglio');

Route::get('/chi-siamo', [PageController::class, 'contatti'])->name('contatti');
Route::post('/salva/contatto',[ContactController::class, 'saveContact'])->name('saveContact');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');