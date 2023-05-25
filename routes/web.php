<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\DataTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\EntityDataController;
use App\Http\Controllers\SystemController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('entities', EntityController::class);
// Route::resource('entity_data', EntityDataController::class);
Route::resource('attributes', AttributeController::class);
Route::resource('systems', SystemController::class);
Route::resource('entity_data', EntityDataController::class)->only('index', 'store');
Route::get('entity_data/{id}', [EntityDataController::class, 'create'])->name('entity_data.create');

Route::post('/load-entity-data-by-entity', [EntityDataController::class, 'loadEntityDataByEntity'])->name('loadEntityDataByEntity');


// Route::resource('datatypes', DataTypeController::class);
