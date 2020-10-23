
<!doctype html>
<html>
    <head>
        <title>Portal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href={{ asset('css/sidebar.css') }}>
        <link rel="stylesheet" href={{ asset('css/app.css') }}>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
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

        <script>
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

            $('.link-menu').on('click', function() {
                $('.link-menu.active').removeClass('active');
                $(this).addClass('active');
            });
        </script>
    </body>
</html>
