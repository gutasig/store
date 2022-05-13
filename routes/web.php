<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ProductsController;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;

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

Route::get('/products', function () {
    $data = Product::where('available', 1)->orderBy('id')->paginate(12);
    return view('list',["products"=>$data]);
});

Route::get('/product/{id}', function ($id) {
    $data = Product::where('available', 1)
                    ->where('id', $id)
                    ->first();
    return view('product',["product"=>$data]);
});

Route::get('/img/{id}', function ($id) {
    $product = Product::where('available', 1)
                    ->where('id', $id)
                    ->first();
    $img = Image::make($product->image)->resize(200, 200);
    return $img->response('png');                
});

Route::get('/add/{id}', function ($id) {
    $product = Product::where('available', 1)->where('id', $id)->first();
    Cart::insert([
        'user_id' => Auth::id(), 
        'product_name' => $product->name,
        'product_id' => $product->id,
        'price' => $product->sale_price
    ]);
    return Redirect::to('/dashboard');
});

Route::get('/del/{id}', function ($id) {
    Cart::where('id', $id)->delete();
    return Redirect::to('/dashboard');
});

Route::get('/dashboard', function () {
    App::setLocale('hu');
    $data = Cart::where('status', '0')->where('user_id', Auth::id())->orderBy('id')->get();
    $subPrice = 0;
    foreach($data as $d) {$subPrice += $d["price"];}
    return view('dashboard',["products"=>$data, "subprice" => $subPrice]);
})->middleware(['auth'])->name('dashboard');

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');

require __DIR__.'/auth.php';
