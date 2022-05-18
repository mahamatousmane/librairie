<?php
//use App\Http\Controllers\PagesController;

use App\Http\Controllers\AccueilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/anclayout');
});

// Route::get('/accueil', function(){
//     return view('front/accueil');
// })->name('accueil');

Route::resource('accueil',AccueilController::class);
Route::resource('service',ServiceController::class);
Route::resource('produit',ProduitController::class);
//Route::resource(('inscription',InscriptionController::class);

// Route::get('apropos',function(){
//     return view('front/apropos');
// });




Route::get('/dashboard', function () {
    return view('back/admin');
})->middleware(['auth'])->name('dashboard');




//Route::get('/accueil','PagesController@accueil');

require __DIR__.'/auth.php';

