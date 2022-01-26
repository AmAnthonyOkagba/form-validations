<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset ('dist/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css')}}">
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="/"><b>Test</b>Form</a>
            </div>

            @yield('content')
        </div>
        <script src="{{ asset ('dist/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset ('dist/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset ('dist/js/adminlte.min.js')}}"></script>
    </body>
</html>