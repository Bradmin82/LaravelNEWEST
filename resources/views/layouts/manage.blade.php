<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rancho Web Design - MANAGEMENT</title>
    <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>

    @include('_includes.nav.main')

    @include('_includes.nav.manage')

    <div class="management-area" id="app">
      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('_includes.notifications.toast')
    @yield('scripts')
</body>
</html>
