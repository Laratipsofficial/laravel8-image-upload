<?php

use App\Http\Controllers\ImageUploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('upload-image', [ImageUploadController::class, 'store']);
