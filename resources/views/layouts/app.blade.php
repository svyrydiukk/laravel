<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title-block')</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        @include('inc.header')
        <div class="container mt-5">
            <div class="row">
                <div class="col-9">
                    @yield('content')
                </div>
                <div class="col-3">
                    @include('inc.aside')
                </div>
            </div>
        </div>

        @include('inc.footer')
    </body>
</html>
