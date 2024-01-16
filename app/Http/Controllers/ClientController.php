<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /****************unprotected pages route*****************************/
    
    public function home(Request $request){
        $category = Category::all();
        $catbanner = Category::limit(11)->get();;
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
    
    /****************Auth pages route*****************************/
    
    public function login(Request $request){
        return view('client_panel.pages.auth.login');
    }

    public function register(Request $request){
        return view('client_panel.pages.auth.register');
    }
    
}
