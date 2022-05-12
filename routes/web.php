<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ProductsController;
use App\Models\Product;

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

Route::get('/', [ProductsController::class,'index']);

Route::get('/product/{id}', function ($id) {
    $data = Product::where('available', 1)
                    ->where('id', $id)
                    ->first();
    return view('product',["product"=>$data]);
});

Route::get('/dashboard', function () {
    App::setLocale('hu');
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
