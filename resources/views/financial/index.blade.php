@extends('layouts.app')

@section('content')

<style>

.btn-more-info {
    border-radius: 50%;
    margin-left: -20px;
}

.fa-plus-circle {
    font-size: 18px;
    width: 40px;
    color: gray;
}

.th-client {
    padding-left: 35px;
}

.div-less-info {
    height: 100px;
}

</style>

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
                <tr class="div-more-info">
                    <td>
                        <span class="btn-more-info"><i class="fa fa-plus-circle"></i></span>
                        {{ $shopping->client->name }}
                    </td>
                    <td> <span class="cnpj">{{ $shopping->client->cnpj }}<span></td>
                    <td> {{ $shopping->client->address }} </td>
                    <td> {{ $shopping->payment->name }} </td>
                    <td> {{ $shopping->value }}</td>
                    <td> {{ $shopping->created_at }}</td>
                </tr>
                <tr class="div-less-info">
                    <td>
                        <span class="btn-more-info"><i class="fa fa-plus-circle"></i></span>
                        {{ $shopping->client->name }}
                    </td>
                    <td> <span class="cnpj">{{ $shopping->client->cnpj }}<span></td>
                    <td> {{ $shopping->client->address }} </td>
                    <td> {{ $shopping->payment->name }} </td>
                    <td> {{ $shopping->value }}</td>
                    <td> {{ $shopping->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="{{ asset('js/financial.js') }}"></script>

@endsection
