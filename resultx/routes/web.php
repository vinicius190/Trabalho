<?php

use App\Http\Controllers\DynamicDropdownController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\DynamicComponent;

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
    return view('/dynamic-dropdown/index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dynamic-dropdown', [DynamicDropdownController::class, 'index'])->name('dashboard');
