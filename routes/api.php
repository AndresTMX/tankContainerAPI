<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/registers', App\Http\Controllers\Api\v1\register_controller::class);