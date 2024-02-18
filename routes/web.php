<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Dashboard\GetDashboardData;
use \App\Http\Controllers\Clients\GetClientsData;
use \App\Http\Controllers\Clients\EditClientData;
use \App\Http\Controllers\Clients\DeleteClientData;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', GetDashboardData::class)->name('dashboard.index');
Route::get('/clients', GetClientsData::class)->name('clients.index');
Route::get('/clients/edit', EditClientData::class)->name('clients.edit');
Route::get('/clients/delete', DeleteClientData::class)->name('clients.delete');
