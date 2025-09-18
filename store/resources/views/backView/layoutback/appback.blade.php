<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') - MyStore</title>
    <!-- CSS files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap (اگر استعمال کر رہے ہوں) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome or icons اگر ہوں -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</head>
<body>
    <div id="app">
        @include('backView.layoutback.partials.navbar')  {{-- navbar partial --}}
        <div class="container-fluid">
            <div class="row">
                @include('backView.layoutback.partials.sidebar') {{-- sidebar partial --}}
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- JS files -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- bootstrap js اگر ضرورت ہو -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
