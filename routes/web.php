<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
  return redirect()->route('categorie.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::get('/liste',[CategorieController::class,'index'])->name('categorie.index');
route::get('/categorie',[CategorieController::class,'create'])->name('categorie.create');
route::post('/categorie',[CategorieController::class,'store'])->name('categorie.store');
route::get('/produit',[ProduitController::class,'index'])->name('produit.index');

});



require __DIR__.'/auth.php';
