@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href={{ asset('css/shopping.css') }}>

    <form name="form-save-shopping" action="">
        @csrf

        <div class="row">

            <div class="form-group col-md-4">
                <label for="client">Client</label>
                <select class="form-control"  id="client" name="client">
                    <option></option>

                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}"> {{ $client->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="payment">Payment</label>
                <select class="form-control" id="payment" name="payment">
                    <option></option>

                    @foreach ($payments as $payment)
                        <option value="{{ $payment->id }}"> {{ $payment->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="value">Value</label>
                <input type="number" class="form-control" name="value" id="value" value="100">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-5">
                <label for="product">Product</label>
                <select class="form-control" name="product[]" id="product">
                    <option></option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"> {{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" name="amount[]" id="amount">
            </div>

            <div class="col-md-1 offset-md-1">
                <i class="fa fa-plus fa-shopping"></i>
            </div>

            <div class="col-md-1">
                <i class="fa fa-trash fa-shopping"></i>
            </div>

        </div>

    </form>

    <div class="row">
        <div class="form-group col-md-1">
            <button type="submit" class="btn btn-primary btn-save-shopping">Register</button>
        <div>
    </div>

    <script src="{{ asset('js/shopping.js') }}"></script>

@endsection

