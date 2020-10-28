@extends('layouts.app')

@section('content')

    <table class="table table-hover bg-light">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>CNPJ</th>
                <th>Address</th>
                <th>Registered date</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($providers as $provider)
                <tr>
                    <td> {{ $provider->name }} </td>
                    <td> <span class="cnpj">{{ $provider->cnpj }}</span></td>
                    <td> {{ $provider->address }}</td>
                    <td> {{ $provider->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="{{ asset('js/provider.js') }}"></script>

@endsection
