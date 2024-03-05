<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Order;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /****************unprotected pages route*****************************/
    
    public function home(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        $catbanner = Category::limit(11)->get();
        $product = Product::orderBy('id' , "desc")->limit(4)->get();
        return view('client_panel.pages.home' , compact('category' , 'catbanner' , 'product' , 'user'));
    }

    public function client_cart(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        $delivery_charge = 150;

        $category = Category::all();
        $catbanner = Category::limit(11)->get();
        $cart = Cart::where('user_id' , "$user->id")->orderBy('id' , "desc")->get();
        return view('client_panel.pages.cart' , compact('category' , 'catbanner' , 'cart' , 'user' , 'delivery_charge'));
    }

    public function add_to_cart(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();

        $checkifproductalreadyadded = Cart::where('user_id' , "$user->id")->where('product_id' , "$request->product_id" )->first();

        if(isset($checkifproductalreadyadded)){
            $checkifproductalreadyadded -> quantity = intval($checkifproductalreadyadded->quantity) + intval($request->quantity) ;
            $checkifproductalreadyadded -> save();
            return redirect() -> back() -> with('success' , "Cart updated successfully");
        }
        else{
           $cart = new Cart();
    
            $cart->product_id = $request->product_id ;
            $cart->user_id = $user->id ;
            $cart->quantity = $request->quantity ;
            $cart->status = "Added";
    
            $cart->save();
            return redirect()->back()->with('success' , "Cart updated successfully");
        }

    }

    public function add_to_wishlist(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        $product = Product::where("id" , "$request->product_id")->get();
       
        return $user;
    }

    public function oldhome(Request $request){
        $category = Category::all();
        return view('client_panel.pages.oldui.home' , compact('category' , 'user'));
    }

    public function about(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        return view('client_panel.pages.about' , compact('category' , 'user'));
    }

    public function contact(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        return view('client_panel.pages.contact' , compact('category' , 'user'));
    }

    public function store(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        $product = Product::orderBy('created_at' , "desc")->paginate(8);
        return view('client_panel.pages.store' , compact('product' , 'category' , 'user'));
    }
    
    public function categoryfilter(Request $request , $slug){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        $cat = Category::where('slug' , "$slug")->first();
        $product = Product::where('category' , $cat->id)->orderBy('created_at' , "desc")->paginate(8);
        return view('client_panel.pages.categoryfilter' , compact('product' , 'category' , 'cat' , 'user'));
    }
    
    public function product(Request $request , $slug){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        $product = Product::where('slug' , "$slug")->first();
        $productsuggestion = Product::where('category' , $product->category)->paginate(4);
        return view('client_panel.pages.product' , compact('product' , 'category' , 'productsuggestion' , 'user' ));
    }
    
    public function privacy(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        return view('client_panel.pages.privacy-policy' , compact('category' , 'user'));
    }
    
    public function profile(Request $request){
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->orWhere('remember_token' , "$session_token")->first();
        
        $category = Category::all();
        return view('client_panel.pages.user-profile' , compact('category' , 'user'));
    }
    
    /****************Auth pages route*****************************/
    
    public function login(Request $request){
        $category = Category::all();
        return view('client_panel.pages.auth.login' , compact('category'));
    }
    
    public function register(Request $request){
        $category = Category::all();
        return view('client_panel.pages.auth.register' , compact('category'));
    }
    
    ############# post route ###################

    public function registerauth(Request $request){
        
        $check = User::where('email' , "$request->email")->orWhere('phone' , "$request->phone")->get();
        if(count($check) == 0){
            $user = new User();

            $user->name= $request->name;
            $user->email= $request->email;
            $user->phone= $request->phone;
            $user->password= md5($request->password);
            $user->remember_token = sha1(time());
            $user->save();

            $request->session()->put('user' , $user->phone );
            $request->session()->put('token' , $user->remember_token );

            return redirect('/');
        }
        else{
            return redirect()->back()->with('fail' , "Account already exist.");
        }
    }
    
     public function loginauth(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('phone', "$request->phone")->first();
        if(isset($user)){
            if($user->password == md5($request->password)){
                
                $user -> remember_token = sha1(time());
                $user->save();
                $request->session()->put('user' , $user->phone );
                $request->session()->put('token' , $user->remember_token );
    
                return redirect('/');  
            }
            else{
                return back()->with('fail', 'You have enter wrong password');
            }

        }
        else{
            return back()->with('fail', 'No user Found');
        }
        
    }

    public function logout(Request $request)
    {
        session()->pull('user');
        session()->pull('token');
        return redirect('/login');
    }

    
}
