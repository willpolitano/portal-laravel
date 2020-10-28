
<!doctype html>
<html>
    <head>
        <title>Portal-laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href={{ asset('css/app.css') }}>

        <!-- scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/mask.js') }}"></script>

    </head>
    <body>

        <div class="container-fluid">

            <div class="wrapper d-flex align-items-stretch">

                @include('layouts.sidebar')

                <div id="content">
                    @yield('content')
                </div>
            </div>

        </div>
    </body>
</html>
