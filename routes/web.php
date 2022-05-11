<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[PublicController::class,"index"])->name("home");
Route::get("/product/{p_id}",[PublicController::class,"view"])->name("viewProduct");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::get("/checkout",[PublicController::class,"checkout"])->name("checkout");

//  Admin controller


Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('product', ProductController::class);
});

            
            //   Auth

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
