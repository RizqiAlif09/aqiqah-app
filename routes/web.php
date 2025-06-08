<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\OrderController;

// Public route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', function () {
    return view('dashboard'); });

    // Article
    Route::get('/article-list', App\Http\Livewire\Article\Index::class)->name('article-list');
    Route::get('/articlel-form/{articleId?}', App\Http\Livewire\Article\FormArticle::class)->name('article-form');
    // Category Article
    Route::get('/category-article-list', App\Http\Livewire\Article\CategoryArticle\Index::class)->name('category-article-list');
    Route::get('/category-article-form/{categoryArticleId?}', App\Http\Livewire\Article\CategoryArticle\FormCategoryArticle::class)->name('category-article-form');
    // Aqiqah
    Route::get('/aqiqah-list', App\Http\Livewire\Aqiqah\Index::class)->name('aqiqah-list');
    Route::get('/aqiqah-form/{aqiqahId?}', App\Http\Livewire\Aqiqah\FormAqiqah::class)->name('aqiqah-form');
    // Nasi Box
    Route::get('/nasi-box-list', App\Http\Livewire\NasiBox\Index::class)->name('nasi-box-list');
    Route::get('/nasi-box-form/{nasiBoxId?}', App\Http\Livewire\NasiBox\FormNasibox::class)->name('nasi-box-form');
    // Transaction
    Route::get('/transaction-list', App\Http\Livewire\Transaction\TransactionIndex::class)->name('transaction-list');
    Route::get('/transaction-detail/{transactionId?}', App\Http\Livewire\Transaction\TransactionDetail::class)->name('transaction-detail');
});
