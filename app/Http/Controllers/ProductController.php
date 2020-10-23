<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(9);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'price'=> 'required',
            'description' => 'required'
        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->update();

        return true;
    }

    public function destroy($id)
    {
        //
    }
}
