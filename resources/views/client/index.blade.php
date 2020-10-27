@extends('layouts.app')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>

    <table class="table table-hover bg-light">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>CNPJ</th>
                <th>Address</th>
                <th>Contacts</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($clients as $client)
                <tr>
                    <td> {{ $client->name }} </td>
                    <td> <span class="cnpj">{{ $client->cnpj }}</span> </td>
                    <td> {{ $client->address }} </td>
                    <td>

                        @if (count($client->contact) > 0)

                            <i class="fa fa-phone-square" data-html="true" data-toggle="tooltip" data-placement="top" title="

                                @foreach ($client->contact as $item)
                                    {{ $item->telephone . '<br>' }}
                                @endforeach
                            ">
                            </i>
                        @else
                            <i class="fa fa-phone-square" data-toggle="tooltip" data-placement="top" title="No phone"></i>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $('.cnpj').mask('99.999.999/9999-99');
        $('[data-toggle="tooltip"]').tooltip();
    </script>

@endsection
