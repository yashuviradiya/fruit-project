<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{




    public function __construct()
    {
        $categories = Category::all();
        view()->share('categories',$categories);
    }

    public function getsubcategory(Request $request)
    {
        $subcategories = SubCategory::where('category_id',$request->category)->get();
        return view('product.subcategories',compact('subcategories'));
    }

    public function index()
    {

        $products = Product::get();
        return view('product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // dd($request->all());

        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'discountprice'=>'required',
            'category'=>'required',
            'subcategory'=>'required',
            'desc'=>'required',
            'image'=>'required',

        ]);

// dd($product->all());

        $product = new Product();
        $product->name = $request->name;
        $product->slug= \Str::slug($request->name);
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->discountprice = $request->discountprice;

        $file = $request->file('image');
        $filename = $request->slug.$file->getClientOriginalName();
        $file->move(public_path('blog'), $filename);
        $product->image = $filename;
        $product->save();


         return redirect()->route('product.index')->with('sucess','product created successfully');



    }


    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->slug= \Str::slug($request->name);
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->discountprice = $request->discountprice;

        $file = $request->file('image');
        $filename = $request->slug.$file->getClientOriginalName();
        $file->move(public_path('blog'), $filename);
        $product->image = $filename;
        $product->save();


         return redirect()->route('product.index')->with('sucess','product created successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('succes','category deleted');
    }
}

 