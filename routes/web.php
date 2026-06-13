<?php
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Business\DashboardController as BusinessDashboard;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboard;

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth', 'role:admin'])->group(function () {

//     Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

// });

Route::middleware(['auth', 'role:business'])->group(function () {

    Route::get('/business/dashboard', [BusinessDashboard::class, 'index']);

});

Route::middleware(['auth', 'role:customer'])->group(function () {

    Route::get('/customer/dashboard', [CustomerDashboard::class, 'index']);

});