<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('users');
});

\Illuminate\Support\Facades\Auth::routes(['register'=>'false']);

//Route::get('home', function (){
//    return redirect('users');
//});

Route::group(['middleware' => 'auth'], function() {
    Route::get('roles', [RoleController::class, 'index'])->name('roles');
    Route::get('role-create', [RoleController::class, 'create'])->name('role-create');
    Route::post('role-store', [RoleController::class, 'store'])->name('role-store');
    Route::get('role-edit', [RoleController::class, 'edit'])->name('role-edit');
    Route::get('role-show', [RoleController::class, 'show'])->name('role-show');
    Route::put('role-update', [RoleController::class, 'update'])->name('role-update');

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('user-create', [UserController::class, 'create'])->name('user-create');
    Route::post('user-store', [UserController::class, 'store'])->name('user-store');


    Route::get('birlik', [\App\Http\Controllers\BirliklarController::class, 'index'])->name('birlik');
    Route::post('birlik-create', [\App\Http\Controllers\BirliklarController::class, 'store'])->name('birlik-create');
    Route::get('birlik-cr', [\App\Http\Controllers\BirliklarController::class, 'create'])->name('birlik-cr');
    Route::get('birlik-edit/{id}', [\App\Http\Controllers\BirliklarController::class, 'edit'])->name('birlik-edit');
    Route::put('birlik-update/{id}', [\App\Http\Controllers\BirliklarController::class, 'update'])->name('birlik-update');
    Route::delete('birlik-delete/{id}', [\App\Http\Controllers\BirliklarController::class, 'delete'])->name('birlik-delete');

    Route::get('buyumlar', [\App\Http\Controllers\BuyumlarController::class, 'index'])->name('buyumlar');
    Route::get('buyum-create', [\App\Http\Controllers\BuyumlarController::class, 'create'])->name('buyum-create');
    Route::post('buyum-store', [\App\Http\Controllers\BuyumlarController::class, 'store'])->name('buyum-store');
    Route::get('buyum-edit/{id}', [\App\Http\Controllers\BuyumlarController::class, 'edit'])->name('buyum-edit');
    Route::put('buyum-update/{id}', [\App\Http\Controllers\BuyumlarController::class, 'update'])->name('buyum-update');
    Route::delete('buyum-delete/{id}', [\App\Http\Controllers\BuyumlarController::class, 'delete'])->name('buyum-delete');

    Route::get('mansablar', [\App\Http\Controllers\MansablarController::class, 'index'])->name('mansablar');
    Route::get('mansab-edit/{id}', [\App\Http\Controllers\MansablarController::class, 'edit'])->name('mansab-edit');
    Route::get('mansab-create', [\App\Http\Controllers\MansablarController::class, 'create'])->name('mansab-create');
    Route::put('mansab-update/{id}', [\App\Http\Controllers\MansablarController::class, 'update'])->name('mansab-update');
    Route::post('mansab-store', [\App\Http\Controllers\MansablarController::class, 'store'])->name('mansab-store');
    Route::delete('mansab-delete/{id}', [\App\Http\Controllers\MansablarController::class, 'destroy'])->name('mansab-delete');

    Route::get('masul', [\App\Http\Controllers\MasulShaxslarController::class, 'index'])->name('masul');
    Route::get('masul-edit/{id}', [\App\Http\Controllers\MasulShaxslarController::class, 'edit'])->name('masul-edit');
    Route::get('masul-create', [\App\Http\Controllers\MasulShaxslarController::class, 'create'])->name('masul-create');
    Route::post('masul-store', [\App\Http\Controllers\MasulShaxslarController::class, 'store'])->name('masul-store');
    Route::put('masul-update/{id}', [\App\Http\Controllers\MasulShaxslarController::class, 'update'])->name('masul-update');
    Route::delete('masul-delete/{id}', [\App\Http\Controllers\MasulShaxslarController::class, 'delete'])->name('masul-delete');

});
