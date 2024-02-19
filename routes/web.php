<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

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

Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/home', [ClientController::class, 'oldhome'])->name('oldhome');
Route::get('/about', [ClientController::class, 'about'])->name('about');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/store', [ClientController::class, 'store'])->name('store');
Route::get('/privacy-policy', [ClientController::class, 'privacy'])->name('privacy-policy');
Route::get('/product/{slug}', [ClientController::class, 'product'])->name('product');
Route::get('/category/{slug}', [ClientController::class, 'categoryfilter'])->name('categoryfilter');
Route::get('/login', [ClientController::class, 'login'])->name('login');
Route::get('/logout', [ClientController::class, 'logout'])->name('logout');
Route::get('/register', [ClientController::class, 'register'])->name('register');
Route::post('/auth/login', [ClientController::class, 'loginauth'])->name('client_login');
Route::post('/auth/signup', [ClientController::class, 'registerauth'])->name('client_register');

Route::middleware('clientlogin')->group(function () {
    
    Route::get('/profile', [ClientController::class, 'profile'])->name('user_profile');


    Route::get('/check', function(){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        return $user;
    });

});

Route::get('/update', function () {

    // $cat = [
    //     "AC",
    //     "TV",
    //     "Speakers",
    //     "Induction Cooktops",
    //     "Emergency Lights",
    //     "Light Bulbs",
    //     "Fans",
    //     "Refrigerators",
    //     "Mixers",
    //     "RO Water Purifiers",
    //     "Dry Irons",
    //     "Dishwashers",
    //     "Washing Machines",
    //     "Air Coolers",
    //     "Geysers",
    //     "Immersion Heaters"
    // ];

    // foreach ($cat as $item) {
    //     $category = new Category();
    //     $category-> slug = strtolower(str_replace( " " , "-" , $item));
    //     $category = Category::where('slug' , "$slug")->first();
    //     $category -> name = $item;
    //     $category -> img = strtolower($item) . ".webp";

    //     $category -> save();
    // }
    // return "success";

    // $data = [
    //     ["name" => "bike", "price" => "1200", "category" => "2",],
    //     ["name" => "car", "price" => "1200", "category" => "2",],
    //     ["name" => "truck", "price" => "1200", "category" => "2",],
    //     ["name" => "Tracktor", "price" => "1200", "category" => "2",],
    //     ["name" => "Scorpio", "price" => "1200", "category" => "2",],
    //     ["name" => "Thar", "price" => "1200", "category" => "2",],
    //     ["name" => "Innova", "price" => "1200", "category" => "2",],
    //     ["name" => "Ninja", "price" => "1200", "category" => "2",],
    //     ["name" => "Austin", "price" => "1200", "category" => "2",],
    //     ["name" => "lost", "price" => "1200", "category" => "2",],
    // ];


    // foreach($data as $item) {
        
    //     $product = new Product();

    //     $product->name = $item['name'];
    //     $product->slug = strtolower(str_replace( " " , "-" , $item['name']));
    //     $product->price = $item['price'];
    //     $product->original_price = intval($item['price']) + 2000;
    //     $product->category = $item['category'];

    //     $product -> save();
    // }

    // $target = Product::all();
    // return $target;
});
