<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ExpoConstruir</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body class="layout-boxed">
    <div class="wrapper">
        @include('form')
    </div>

    <script src="{{ asset('assets/lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lte/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validation/localization/messages_es.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        $(document).ready(function() {
            $(":input[data-mask]").inputmask();
        });
    </script>
</body>

</html>
