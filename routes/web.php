<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;
use App\Models\CashFlow;
use App\Http\Controllers\CashFlowController;


Route::view("/", "home");

Route::view("/dashboard", "dashboard")->middleware("auth");

//Football
Route::view("/countries", "countries")->middleware("auth");
Route::view("/competitions", "competitions")->middleware("auth");
Route::view("/teams", "teams")->middleware("auth");
Route::view("/players", "players")->middleware("auth");

//App
//App1
Route::view("/app1", "app1", ["cashflows" => CashFlow::all()])->middleware("auth");
// Route::delete("/cashflow/{cashflow}", [CashFlowController::class, "destroy"])->middleware("auth")->can("delete", "cashflow");
//App2
Route::view("/app2", "app2")->middleware("auth");
//App3
Route::view("/app3", "app3")->middleware("auth");

Route::view("profile", "profile")->middleware("auth");

//Auth
Route::get("/signup", [RegisterUserController::class, "create"]);
Route::post("/signup", [RegisterUserController::class, "store"]);
Route::get("/signin", [LoginUserController::class, "create"])->name("login"); // ->name("login") for auth if is not auth redirect this name
Route::post("/signin", [LoginUserController::class, "store"]);
Route::get("/signout", [LoginUserController::class, "destroy"]);
