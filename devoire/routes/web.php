<?php

use App\Http\Controllers\etudiantController;
use Illuminate\Support\Facades\Route;


Route::get('ajout', [etudiantController::class, 'index']);
Route::post('ajout', [etudiantController::class, 'store']);

Route::get('modif', [etudiantController::class, 'index3']);
Route::get('listeEtud', [etudiantController::class, 'index2']);

