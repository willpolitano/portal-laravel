<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Product;

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
        echo 'foi';
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
