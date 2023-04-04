<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel 9 + Bootstrap Template</title>

  @yield('icons')

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
  @yield('navbar')

  <main>
    @yield('main-content')
  </main>

  @yield('modals')
</body>

</html>
