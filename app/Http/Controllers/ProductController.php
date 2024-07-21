<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // show products page
    public function index()
    {
        return view('product.list');
    }

    // show create product page
    public function create()
    {
        return view('product.create');
    }

    // store a product in db
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        // here we will insert product in database
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->desciption = $request->desciption;
        $product->image = $request->image;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Prodect added successfully');
    }

    // show edit product page
    public function edit()
    {
        return view();
    }

    // show edit product page
    public function upadte()
    {
        return view();
    }

    // show edit destory page
    public function destory()
    {
        return view();
    }
}
