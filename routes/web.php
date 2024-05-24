<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;


Route::view("/", "home");

Route::view("/dashboard", "dashboard")->middleware("auth");

Route::view("/countries", "countries")->middleware("auth");

Route::view("/competitions", "competitions")->middleware("auth");

Route::view("/teams", "teams")->middleware("auth");

Route::view("/players", "players")->middleware("auth");

Route::view("profile", "profile")->middleware("auth");

//Auth
Route::get("/signup", [RegisterUserController::class, "create"]);
Route::post("/signup", [RegisterUserController::class, "store"]);
Route::get("/signin", [LoginUserController::class, "create"])->name("login"); // ->name("login") for auth if is not auth redirect this name
Route::post("/signin", [LoginUserController::class, "store"]);
Route::get("/signout", [LoginUserController::class, "destroy"]);
