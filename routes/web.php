<?php

use App\Http\Controllers\Agent\DashboardController as AgentDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Pemilik\DashboardController;
use App\Http\Middleware\CheckRoleAgent;
use App\Http\Middleware\CheckRolePemilik;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/login',[LoginController::class, 'loginForm'])->name('login');
Route::post('/login',[LoginController::class, 'login']);
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/pemilik/dashboard',[DashboardController::class, 'index'])->middleware(CheckRolePemilik::class)->name('Pemilik.Dashboard');
Route::get('/agent/dashboard',[AgentDashboardController::class, 'index'])->middleware(CheckRoleAgent::class)->name('Agent.Dashboard');