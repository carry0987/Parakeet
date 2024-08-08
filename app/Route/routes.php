<?php
use App\Controller\{
    InstallController,
    HomeController
};
use Serapha\Routing\Route;

// Regular routes
Route::get('/', [HomeController::class]);
Route::get('/install', [InstallController::class, 'index']);
