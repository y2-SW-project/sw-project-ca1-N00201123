<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', [
            // the view can see the festivals (the green one)
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // when user clicks submit on the create view above
        // the festival will be stored in the DB
        $request->validate([
            'title' => 'required',
            'description' =>'required|max:200',
            'date' => 'required|date|before:tomorrow'
        ]);

        // if validation passes create the new book
        $product = new Product();
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->date = $request->input('date');
        $product->likes = $request->input('likes');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the festival by ID from the Database
        $product = Product::findOrFail($id);

        // Load the edit view and pass the festival to
        // that view
        return view('admin.products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // first get the existing festival that the user is update
        $product = Product::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'description' =>'required|max:500',
            'date' => 'required|date|before:tomorrow'
        ]);

        // if validation passes then update existing festival
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->date = $request->input('date');
        $product->likes = $request->input('likes');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
