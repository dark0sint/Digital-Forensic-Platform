<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\PressReleaseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cases', CaseController::class);
Route::resource('roadmaps', RoadmapController::class);
Route::resource('press-releases', PressReleaseController::class);
