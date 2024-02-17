<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /****************unprotected pages route*****************************/
    
    public function home(Request $request){
        $category = Category::all();
        $catbanner = Category::limit(11)->get();
        $product = Product::orderBy('id' , "desc")->limit(4)->get();
        return view('client_panel.pages.home' , compact('category' , 'catbanner' , 'product'));
    }

    public function oldhome(Request $request){
        $category = Category::all();
        return view('client_panel.pages.oldui.home' , compact('category'));
    }

    public function about(Request $request){
        $category = Category::all();
        return view('client_panel.pages.about' , compact('category'));
    }

    public function contact(Request $request){
        $category = Category::all();
        return view('client_panel.pages.contact' , compact('category'));
    }

    public function store(Request $request){
        $category = Category::all();
        $product = Product::orderBy('created_at' , "desc")->paginate(8);
        return view('client_panel.pages.store' , compact('product' , 'category'));
    }
    
    public function categoryfilter(Request $request , $slug){
        $category = Category::all();
        $cat = Category::where('slug' , "$slug")->first();
        $product = Product::where('category' , $cat->id)->orderBy('created_at' , "desc")->paginate(8);
        return view('client_panel.pages.categoryfilter' , compact('product' , 'category' , 'cat'));
    }
    
    public function product(Request $request , $slug){
        $category = Category::all();
        $product = Product::where('slug' , "$slug")->first();
        $productsuggestion = Product::where('category' , $product->category)->paginate(4);
        return view('client_panel.pages.product' , compact('product' , 'category' , 'productsuggestion' ));
    }
    
    public function privacy(Request $request){
        $category = Category::all();
        return view('client_panel.pages.privacy-policy' , compact('category'));
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
