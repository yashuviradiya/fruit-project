<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $category = Category::orderBy('id','DESC')->get();
        view()->share('category',$category);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory ::get();
        return view('subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category'=>'required',

        ]);

        $subcategory = new subcategory;
        $subcategory->name=$request->name;
        $subcategory->slug = \Str::slug($request->name);
        $subcategory->category_id=$request->category;
        $subcategory->save();
        return redirect()->route('subcategory.index')->with('succes','subcategory created');


    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }


    public function delete($id)
    {
        $subcategory = SubCategory::where('id',$id)->first();
        $subcategory->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('subcategory.index')->with('success','category created!');
    }
}
