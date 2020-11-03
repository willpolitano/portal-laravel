@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href={{ asset('css/shopping.css') }}>

    <form>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="client">Client</label>
                <select id="client" class="form-control">
                    <option></option>

                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}"> {{ $client->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="payment">Payment</label>
                <select id="payment" class="form-control">
                    <option></option>

                    @foreach ($payments as $payment)
                        <option value="{{ $payment->id }}"> {{ $payment->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="value">Value</label>
                <input type="number" class="form-control" id="value" readonly>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-5">
                <label for="product">Product</label>
                <select id="product" class="form-control">
                    <option></option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"> {{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount">
            </div>

            <div class="col-md-1 offset-md-1">
                <i class="fa fa-plus fa-shopping" aria-hidden="true"></i>
            </div>

            <div class="col-md-1">
                <i class="fa fa-trash fa-shopping" aria-hidden="true"></i>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-1">
                <button type="submit" class="btn btn-primary">Register</button>
            <div>
        </div>

    </form>

@endsection

