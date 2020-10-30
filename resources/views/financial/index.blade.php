@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href={{ asset('css/financial.css') }}>

    <table class="table table-hover bg-light">
        <thead class="thead-dark">
            <tr>
                <th class="th-client">Client</th>
                <th>CNPJ</th>
                <th>Address</th>
                <th>Paymemt</th>
                <th>Value</th>
                <th>Registered date</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($shoppings as $shopping)
                <tr>
                    <td>
                        <span class="btn-more-info collapsed" data-toggle="collapse" href="#collapse{{$shopping->id}}"><i class="fa fa-plus-circle"></i></span>
                        {{ $shopping->client->name }}
                    </td>
                    <td> <span class="cnpj">{{ $shopping->client->cnpj }}<span></td>
                    <td> {{ $shopping->client->address }} </td>
                    <td> {{ $shopping->payment->name }} </td>
                    <td> {{ $shopping->value }} </td>
                    <td> {{ $shopping->created_at }} </td>
                </tr>
                <tr class="div-less-info collapse in p-3" id="collapse{{$shopping->id}}">
                    <td colspan="6">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-2"><strong>Products</strong></div>
                            <div class="col-4"></div>
                            <div class="col-2"><strong>Qtdes</strong></div>
                        </div>
                        <hr>

                        @if (count($shopping->product) > 0)

                            @foreach ($shopping->product as $product)

                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-2"> {{ $product->name }} </div>
                                    <div class="col-4"></div>
                                    <div class="col-2"> {{ $product->pivot->amount }} </div>
                                </div>

                            @endforeach

                        @else

                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-2"> No product </div>
                                <div class="col-4"></div>
                                <div class="col-2"> No amount </div>
                            </div>

                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="{{ asset('js/financial.js') }}"></script>

@endsection
