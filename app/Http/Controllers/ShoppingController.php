<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shopping;
use App\Models\Shoppings_Products;

class ShoppingController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $payments = Payment::all();
        $products = Product::all();

        return view('shopping.index', compact('clients', 'payments', 'products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $shopping = new Shopping();
        $shopping->client_id = $request->input('client');
        $shopping->payment_id = $request->input('payment');
        $shopping->value = $request->input('value');
        $shopping->save();
        $idShopping = $shopping->id;

        $products = $request->input('product');
        $amounts = $request->input('amount');

        if(count($products) > 0) {

            foreach($products as $index => $item) {
                $product = new Shoppings_Products();
                $product->product_id = $item;
                $product->shopping_id = $idShopping;
                $product->amount = $amounts[$index];
                $product->save();
            }
        }

        return true;
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
