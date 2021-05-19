<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <main>
        @if(session('status'))
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-8 offset-md-2">
                    <div class="alert alert-warning" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        </div>
        @endif

        @yield('content')
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>