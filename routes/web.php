<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\SubmitForfaitController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/','acceuil');
Route::get('/produits', [ProduitController::class,'index'])->name('produits');
Route::get('/forfaits', [ForfaitController::class,'index'])->name('forfaits');



Route::get('/forfaits/{forfait}',[ForfaitController::class, 'inscriptionForm'])->name('forfait.inscriptionForm')->middleware('auth');
Route::post('/forfaits/inscription',[SubmitForfaitController::class, 'submitInscription']);


Route::post('/panier/{produit}/{Prix}', [CartController::class, 'store'])->name('cart.store')->middleware('auth');

Route::get('/panier', [PanierController::class, 'index'])->name('panier');
Route::get('/ViderPanier',[PanierController::class, 'deleteAllRecords'])->name('deleteAllRecords');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
