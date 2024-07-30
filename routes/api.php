<?php

use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BeritaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
    return $request->user();
});

Route::get("kategori", [KategoriController::class, "index"]);
Route::post("kategori", [KategoriController::class, "store"]);
Route::get("kategori/{id}", [KategoriController::class, "show"]);
Route::put("kategori/{id}", [KategoriController::class, "update"]);
Route::delete("kategori/{id}", [KategoriController::class, "destroy"]);

Route::get("tag", [TagController::class, "index"]);
Route::post("tag", [TagController::class, "store"]);
Route::get("tag/{id}", [TagController::class, "show"]);
Route::put("tag/{id}", [TagController::class, "update"]);
Route::delete("tag/{id}", [TagController::class, "destroy"]);

Route::get("user", [UserController::class, "index"]);
Route::post("user", [UserController::class, "store"]);
Route::get("user/{id}", [UserController::class, "show"]);
Route::put("user/{id}", [UserController::class, "update"]);
Route::delete("user/{id}", [UserController::class, "destroy"]);

Route::get("berita", [BeritaController::class, "index"]);
Route::post("berita", [BeritaController::class, "store"]);
Route::get("berita/{id}", [BeritaController::class, "show"]);
Route::put("berita/{id}", [BeritaController::class, "update"]);
Route::delete("berita/{id}", [BeritaController::class, "destroy"]);
