<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TransactionConroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('transaction', [TransactionConroller::class, 'create']);
Route::get('transaction', [TransactionConroller::class, 'fetch'])->name('transaction.fetch');
Route::get('transaction/{id}', [TransactionConroller::class, 'fetch_by_id']);
Route::put('transaction/{id}', [TransactionConroller::class, 'update']);
Route::delete('transaction/{id}', [TransactionConroller::class, 'delete']);
Route::patch('transaction/{id}', [TransactionConroller::class, 'update_status']);
