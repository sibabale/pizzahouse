<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>

      @yield('content')

      <footer class="fixed w-full bottom-0">
        <p>Copyright 2020 Pizza House</p>
      </footer>
    </body>
</html>
