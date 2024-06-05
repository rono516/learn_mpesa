<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaSTKPUSHController;

Route::post('v1/confirm', [MpesaSTKPUSHController::class, 'STKConfirm'])->name('mpesa.confirm');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
