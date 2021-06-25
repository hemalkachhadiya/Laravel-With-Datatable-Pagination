<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DBController;
use App\Http\Controllers\UserConttroller;

Route::get('/', [ UserConttroller::class, 'index' ])->name('user.index');
Route::post('users/list', [ UserConttroller::class, 'list' ])->name('user.list');
Route::get('users/create', [ UserConttroller::class, 'create' ])->name('user.create');
Route::post('users/store', [ UserConttroller::class, 'store' ])->name('user.store');
Route::delete('users/{id}', [ UserConttroller::class, 'destroy' ])->name('user.destroy');

// Clear Cahce
Route::get('/clear', function () {
    \Artisan::call('optimize:clear');
    return response()->json(
        array(
            'status' => 'success',
            'message' => 'cache clear successfully.',
        ),
        200
    );
});

Route::group([
    'prefix' => 'db',
], function () {
    // Database Migration
    Route::get('/migrate', [ DBController::class, 'migrate' ]);
    Route::get('/migrate-fresh', [ DBController::class, 'migrateFresh' ]);
    Route::get('/migrate-rollback', [ DBController::class, 'migrateRollback' ]);
    Route::get('/seed', [ DBController::class, 'seed' ]);
});
