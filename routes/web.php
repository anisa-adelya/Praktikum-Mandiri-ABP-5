<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/obat', [DataobatController::class, 'index'])->name('index');a
Route::get('/obat/index', [DataobatController::class, 'index'])->name('index.obat');
Route::get('/obat/create', [DataobatController::class, 'create'])->name('create.obat');
Route::post('/obat/store', [DataobatController::class, 'store'])->name('store.obat');
Route::get('/obat/edit/{id}', [DataobatController::class, 'edit'])->name('edit.obat');
Route::post('/obat/update/{id}', [DataobatController::class, 'update'])->name('update.obat');
Route::get('/obat/delete/{id}', [DataobatController::class, 'delete'])->name('delete.obat');

Route::get('/input', function () {
    return view('inputObat');
});
