<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/member', [MemberController::class, "addMember"]);
Route::delete('/member/{id}', [MemberController::class, 'deleteMember']);
Route::put('/member/{id}', [MemberController::class, 'updateMember']);
Route::get('/member', [MemberController::class, 'selectMember']);

