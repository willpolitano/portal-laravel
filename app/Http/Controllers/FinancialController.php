<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopping;

class FinancialController extends Controller
{
    public function index()
    {
        $shoppings = Shopping::all();
        return view('financial.index', compact('shoppings'));
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
