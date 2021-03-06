<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Instalacion del Sistema</title>
    {{-- carga todos los estilos generales --}}
    @include('layouts.include.styles')
  </head>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

        var base_url = '{{ url('/') }}';
        var assetsPath = base_url + '/assets';
    </script>

</head>
<body class="login">

    @yield('content')
</body>

{{-- llama a todo los script generales --}}
@include('layouts.include.script')

@stack('script')
</html>
