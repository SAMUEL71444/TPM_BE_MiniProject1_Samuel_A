<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/item-list', [ItemController::class, 'fetchItemList']);
Route::get('/add-item', [ItemController::class, 'showAddItemForm'])->name('showAddItemForm');
Route::post('/add-item/submit', [ItemController::class, 'storeItem'])->name('storeItem');
