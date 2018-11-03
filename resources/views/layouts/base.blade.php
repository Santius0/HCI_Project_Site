<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title.' | ' : '' }} {{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">--}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
    <script>
        require("jsdom").env("", function(err, window) {
            if (err) {
                console.error(err);
                return;
            }

            var $ = require("jquery")(window);
        });
    </script>

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>

    @include('layouts._favicons')
</head>

<body class="{{ $bodyClass ?? '' }}">
    <div id="app">
        @include('layouts._nav')

        @yield('body')

        @include('layouts._footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

