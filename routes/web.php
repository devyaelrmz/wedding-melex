<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/guests/search', [MainController::class, 'searchForGuests'])->name('searchForGuests');
Route::get('/guests/amount/{identifier}', [MainController::class, 'allInformationGuests'])->name('allInformationGuests');

Route::get('/guests/cancel/{guest}', [MainController::class, 'cancelGuests'])->name('cancelGuests');
Route::post('/guests/save', [MainController::class, 'setInformation'])->name('setInformation');

Route::get('/download', [MainController::class, 'export']);
