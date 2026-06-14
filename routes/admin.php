<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\SubscriptionPlanController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthController::class, 'create'])->name('admin.login');
    // Route::post('/admin/login', [AuthController::class, 'store'])->name('admin.login.submit');

    // Route::get('/admin/login', [AuthController::class, 'showLogin'])
    //     ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
        ->name('admin.login.submit');

    Route::get('/admin/register', [AuthController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/admin/register', [AuthController::class, 'register'])->name('admin.register.submit');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/subscription-plans', SubscriptionPlanController::class)
        ->names('admin.subscription_plans')
        ->parameters(['subscription-plans' => 'subscriptionPlan']);
});
