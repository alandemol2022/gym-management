<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\TodoController::class, 'welcome'])->name('member.welcome');
Route::get('/member', [App\Http\Controllers\TodoController::class, 'create'])->name('member.create');
Route::post('/member', [App\Http\Controllers\TodoController::class, 'store'])->name('member.store');
Route::get('/member/{id}', [App\Http\Controllers\TodoController::class, 'show'])->name('member.show');
Route::post('/member/{id}', [App\Http\Controllers\TodoController::class, 'update'])->name('member.update');
Route::post('/member/{id}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('member.destroy');
