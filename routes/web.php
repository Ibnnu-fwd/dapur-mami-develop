<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CashierController;
use App\Http\Controllers\Admin\CatalogManagementController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('user.login');

Route::get('home', [HomeController::class, 'index'])->name('user.home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/total-sales-type-of-menu', [DashboardController::class, 'totalSalesTypeOfMenu'])->name('dashboard.total-sales-type-of-menu');
    Route::get('/', DashboardController::class)->name('admin.dashboard');

    // Menu
    Route::get('menu/search', [MenuController::class, 'search'])->name('admin.menu.search');
    Route::get('menu/category/{id}', [MenuController::class, 'category'])->name('admin.menu.category');
    Route::resource('menu', MenuController::class, ['as' => 'admin']);

    // Invoice
    Route::get('invoice/transaction-history/export', [InvoiceController::class, 'export'])->name('admin.transaction-history.export');
    Route::get('invoice/transaction-history', [InvoiceController::class, 'transactionHistory'])->name('admin.transaction-history');
    Route::post('invoice/update-status/{id}', [InvoiceController::class, 'updateStatus'])->name('admin.invoice.update-status');
    Route::get('invoice/detail/{id}', [InvoiceController::class, 'detail'])->name('admin.invoice.detail');
    Route::get('invoice/print/{id}', [InvoiceController::class, 'print'])->name('admin.invoice.print');
    Route::get('invoice/search', [InvoiceController::class, 'search'])->name('admin.invoice.search');
    Route::get('invoice/period', [InvoiceController::class, 'period'])->name('admin.invoice.period');
    Route::resource('invoice', InvoiceController::class, ['as' => 'admin']);

    // Setting
    Route::post('setting/password/update', [SettingController::class, 'passwordUpdate'])->name('admin.setting.password.update');
    Route::post('setting/password/check', [SettingController::class, 'passwordCheck'])->name('admin.setting.password.check');
    Route::resource('setting', SettingController::class, ['as' => 'admin']);

    // Catalog Management
    Route::resource('catalog-management', CatalogManagementController::class, ['as' => 'admin']);

    // Booking
    Route::post('booking/cancel/{id}', [BookingController::class, 'cancel'])->name('admin.booking.cancel');
    Route::post('booking/update-status/{id}', [BookingController::class, 'updateStatus'])->name('admin.booking.update-status');
    Route::get('booking/period', [BookingController::class, 'period'])->name('admin.booking.period');
    Route::get('booking/print/{id}', [BookingController::class, 'print'])->name('admin.booking.print');
    Route::get('booking/detail/{id}', [BookingController::class, 'detail'])->name('admin.booking.detail');
    Route::post('booking/add-cart/{id}', [BookingController::class, 'addCart'])->name('admin.booking.add-cart');
    Route::resource('booking', BookingController::class, ['as' => 'admin']);

    // Cashier
    Route::resource('cashier', CashierController::class, ['as' => 'admin']);

    // Material
    Route::post('material/confirmed/{id}', [MaterialController::class, 'confirmed'])->name('admin.material.confirmed');
    Route::post('material/process/{id}', [MaterialController::class, 'process'])->name('admin.material.process');
    Route::resource('material', MaterialController::class, ['as' => 'admin']);
});

require __DIR__ . '/auth.php';
