<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ahlinyaweb Produk | Log in</title>
    @include('layouts.auth.components.style')
    @stack('css')
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        @yield('content')
    </div>

    @include('layouts.auth.components.script')
    @stack('js')
</body>
</html>
