<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Project;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->paginate(15);
        return (view('pages.product.index', ['products' =>$products]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::orderBy('id', 'asc')->get();
        $categories = Category::orderBy('id', 'asc')->get();
        return view('pages.product.create', ['projects' => $projects, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'category_id' => 'required',
            'project_id' => 'required',

        ]);

        Product::create([
            'name' => $request->name,
            'details' => $request->details,
            'category_id' => $request->category_id,
            'project_id' => $request->project_id,

        ]);
        return redirect('products')->with('status','product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return (view('pages.product.show', ['product' =>$product]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $projects = Project::orderBy('id', 'asc')->get();
        $categories = Category::orderBy('id', 'asc')->get();
        return (view('pages.product.edit', ['product' =>$product],['projects' =>$projects, 'categories' =>$categories] ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect('products')->with('status','product edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products')->with('status','Item deleted successfully!')->with('type', 'success');
    }
}
