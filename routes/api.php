<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/test', [ApiController::class, 'test']);
});


?>
