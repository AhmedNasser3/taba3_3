<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\Admin\PrintServiceCrudController;

Route::get('/', function(){
    return view('frontend.home.index');
    })->name('home.page');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('printer/{PrinterId}', [PrinterController::class, 'AddPrint'])->name('print.create');
Route::post('/print-request/store', [PrinterController::class, 'store'])->name('print.store');
Route::get('/cart', [OrderController::class, 'index'])->name('cart.show');
Route::get('admin/print-service/accept/{id}', [PrintServiceCrudController::class, 'acceptRequest'])->name('admin.print-service.accept');
Route::get('admin/print-service/reject/{id}', [PrintServiceCrudController::class, 'rejectRequest'])->name('admin.print-service.reject');