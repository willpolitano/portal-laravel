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
                            <div class="col">label</div>
                            <div class="col">value 1</div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="{{ asset('js/financial.js') }}"></script>

@endsection
