<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;


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

Route::get('/upcat', function () {

    $product = Product::where('video' , NULL)->get();
    $cat = Category::all();
    // echo "<pre>";
    // return print_r($product->toArray());
    return view('client_panel.pages.test' , compact('product' , 'cat'));

});

Route::post('/upcat', function (Request $request) {

    $product = Product::where('id' , "$request->product_id")->first();
    $product -> name = $request->title;
    $product -> category = $request->category;
    $product -> price = $request->price;
    $product -> original_price = $request->price + (($request->price * 48) / 100);
    $product -> video = "yes";

    $product->save();
    // return $product;
    return redirect()->back();

})->name('upcat');

Route::get('/update', function () {

    $data = [
        '100 Ltr Mini Baar.png',
        '180 Ltr Plain series.png',
        '1stLED Street Light 20 ,30 , 40, 50, 90 Watt.png',
        '215 Ltr Creeper series.png',
        '24inch HD LED TV.png',
        '24inch Smart Android LED TV.png',
        '2nd image.png',
        '2nd LED Street Light 110 & 120 Watt.png',
        '32 inch HD LED TV(frameless).png',
        '32inch Smart Google TV.png',
        '32inch Smart LED TV (512Mb - 4GB).png',
        '32inch Smart OS TV.png',
        '3Jar Grinder.png',
        '3rd image.png',
        '4 Jar Grinder.png',
        '43inch Smart Google TV.png',
        '43inch Smart LED TV(4K UHD-Vale OS).png',
        '43inch Smart LED TV(512mb-4gb) with frameless sound baar.png',
        '43inch Smart web OS(Cloud Tv + Dual Bluetooth 18GB).png',
        '50inch Smart Google TV(1GB ram).png',
        '50inch Smart QLED TV.png',
        '50Ltr Mini Baar.png',
        '55inch Smart Google TV.png',
        '55inch Smart QLED TV.png',
        '65inch QLED Web OS TV.png',
        '65inch Smart Google TV.png',
        '6ltr , 10Ltr , 25Ltr, 35 Ltr.png',
        '75inch QLED Smart Web OS TV.png',
        '86inch QLED Smart Web OS TV.png',
        'AC.png',
        'Alpha Fan.png',
        'Alpha Induction Cooktop.png',
        'Arjun wall fan.png',
        'bentan ferrata Fan.png',
        'bharat Induction Cooktop.png',
        'Black Exhaust Fan.png',
        'BLDC Fan.png',
        'BLDC Wooden  Fan.png',
        'Conceal DOB 7 Watt.png',
        'Conceal Light Driver 6 watt.png',
        'Conceal Light DS 6 watt.png',
        'Copper Immersion Rod (1000,1500,2000) Watt.png',
        'crystsal Fan.png',
        'Deeplight DOB driver (1 & 3) watt.png',
        'Deeplight driver 3 watt.png',
        'Deeplight Tiranga 4 watt.png',
        'emergency light 5W.png',
        'Fan Room Heater.png',
        'Frost Gaurd Cooler.png',
        'Frosty Fan.png',
        'Gamma Fan.png',
        'Hybrid Fan.png',
        'Immersion Rod (1000,1500,2000) Watt.png',
        'Iron Exhaust Fan.png',
        'Juicer Grinder.png',
        'LED 2 Flood Light  50 W.png',
        'LED 2 Flood Light 200 W.png',
        'LED 2 Flood Light 50 W.png',
        'LED Blub DOB Gamma(5, 7, 9, 12, 15, 18, 20) Watt.png',
        'LED Blub HPF Driver(5, 7, 9, 12, 15, 18, 20) Watt.png',
        'LED Flood Light 100 W.png',
        'LED Flood Light 200 W.png',
        'LED Flood Light 30W.png',
        'LED Flood Light 50 W.png',
        'LED Flood Light.  30W.png',
        'LED Hummer Blub DOB Gamma30, 40, 50) Watt.png',
        'LED Hummer Blub HPF driver (30, 40, 50) Watt.png',
        'LED Street Light 110 & 120 Watt.png',
        'LED suface panel (8,15, 20) Watt.png',
        'LED Torch Rechargeable (3,5,10)Watt.png',
        'LED Torch Rechargeable 15 Watt.png',
        'LED Torch Rechargeable 35 Watt.png',
        'LED Torch Rechargeable.png',
        'LED Tube light (5, 10, 20, 22, 36 Watt).png',
        'LED Tube light .(5, 10, 20, 22, 36 Watt).png',
        'Lens Conceal DeepLight ( 3,6 & 12 )Watt.png',
        'Mini water Geyser Ltr.png',
        'Mono Dry Iron.png',
        'Mono water Geyser 3 ltr.png',
        'Night Blub 0.5watt.png',
        'Panel Light (8,15,20)watt.png',
        'Party Speaker 20W.png',
        'Party Speaker 23.6W.png',
        'Party Speaker 26W.png',
        'Polar Chiller Cooler.png',
        'Poly Dry Iron.png',
        'Premium  Room Heater.png',
        'Premium Gyeser (10, 15, 25, 35) Ltr.png',
        'purple Pedestal fan.png',
        'Semi DULEXE Fan.png',
        'Semi-Automatic Washing Machine 7.5kg. (toughend Glass).png',
        'Semi-Automatic Washing Machine 7.5kg.png',
        'Semi-Automatic Washing Machine 8.5kg (toughend Glass).png',
        'Semi-Automatic Washing Machine 8.5kg.png',
        'Sharp Fan.png',
        'Smart Fan.png',
        'star Fan.png',
        'Super Deluxe fan.png',
        'Table Moving Fan 2.0.png',
        'Table moving Fan.png',
    ];

    echo "<pre>";

    foreach ($data as $value) {
        $pro = new Product();

        $pro -> name = substr($value , 0 , -4);
        $pro -> slug = strtolower(str_replace("," , "" , str_replace(" " , "-" , substr($value , 0 , -4))));
        $pro -> img = $value;
        $pro -> price = 1200;
        $pro -> original_price = 3200;
        $pro -> category = 2;


        
        print_r($pro->toArray());

        // $pro->save();
    }

    return count($data);

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
