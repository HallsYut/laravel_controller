<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title'. 'Master')</title>
    @yield('style')
</head>
<body>
    <div class="nav">
        <h1>Nuttawut</h1>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
    @yield('script')
</body>
</html>