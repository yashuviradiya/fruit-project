<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Product;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        $settings = Setting::first();
        view()->share('settings',$settings);
        $categories = category::all();
        view()->share('categories',$categories);
        $products = Product::all();
        view()->share('products',$products);
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('front.index', compact('products'));

    }

    public function shop()
    {

        $products = Product::all();
        return view('front.shop', compact('products'));
    }

    public function shopdetail($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('front.shopdetail',compact('product'));
    }

    public function cart()
    {
        $products = Product::all();
        return view('front.cart',compact('products'));
    }

    public function chackout()
    {
        $products = Product::all();
        return view('front.chackout',compact('products'));
    }

    public function testimonial()
    {
        return view('front.testimonial');
    }

    public function page()
    {
        return view('front.page');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('front.contact',compact('setting'));
    }
    public function aboutus()
    {
        return view('front.aboutus');
    }
    public function privacypolicy()
    {
        return view('front.privacypolicy');
    }




    public function detailproduct($slug)
    {
        $products = Product::where('slug',$slug)->firstorfail();
        return view('front.shopdetail',compact('products'));
    }





    public function showProductsByCategory($id)
    {
        $category = Category::firstOrFail($id);
        $products = $category->products;

        return view('category.products', compact('category', 'products'));
    }



    public function categoryslug($slug)
    {

        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id',$category->id)->get();
        return view('front.shop',compact('products','category'));

    }

    public function contactsubmit(Request $request)
    {
        $ContactFormData = $request->only(['name','email','message']);

        mail::to('krishaginoya@gmail.com')->send(new ContactMail($ContactFormData));

        return back()->with('success','your message has bin sent succesfully');
    }



}
